<?php

namespace App\Service;
use App\Entity\Ticket;
use App\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
use Endroid\QrCode\Writer\Result\PngResult;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use TCPDF;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class TicketService
{
    private $entityManager;
    private $twig;

    public function __construct(EntityManagerInterface $entityManager, Environment $twig)
    {
        $this->entityManager = $entityManager;
        $this->twig = $twig;

    }

    public function createTicket(Event $event, $nom, $email): Ticket
    {
        $ticket = new Ticket();
        $ticket->setEvent($event);
        $ticket->setNom($nom);
        $ticket->setEmail($email);
        $ticket->setBookingDate(new \DateTime());

        $this->entityManager->persist($ticket);
        $this->entityManager->flush();

        return $ticket;
    }

    public function sendTicketByEmail(Ticket $ticket, MailerInterface $mailer): void
    {
         // Retrieve the event object from the database
    $event = $ticket->getEvent();

    // Create the QR code image and get its stream
    $qrCode = QrCode::create($ticket->getId());
           
    $writer = new PngWriter();
    $result = $writer->write($qrCode);
    $qrCodeImage = $result->getString();



    // Create a new PDF document using Mpdf
    $html =  $this->twig->render('ticket/ticketpdf.html.twig', ['ticket' => $ticket, 'qrCodeImage' => $qrCodeImage]);
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();
    $pdf->writeHTML($html, true, false, true, false, '');
    $pdfContent = $pdf->Output('ticket.pdf', 'S');


    // Create a new email message with the PDF attachment and QR code image attachment
    $email = (new Email())
        ->from('fithub.noreply@gmail.com') // <-- Change to your Gmail address
        ->to($ticket->getEmail())
        ->subject('Your ticket')
        ->attach($pdfContent, 'ticket.pdf', 'application/pdf')
        ->attach($qrCodeImage, 'qr_code.png', 'image/png');

    // Use Gmail SMTP to send the email
    $mailer->send($email);
    }

    public function saveTicket(Ticket $ticket, string $nom, string $email): void
    {
        $ticket->setNom($nom);
        $ticket->setEmail($email);

        $this->entityManager->persist($ticket);
        $this->entityManager->flush();
    }
}