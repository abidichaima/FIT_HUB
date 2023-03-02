<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use App\Service\TicketService;
use Dompdf\Dompdf;
use Dompdf\Options;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Margin\Margin;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Form\AdminTicketType;


use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Event;
use App\Repository\TicketRepository;
use App\Entity\Ticket;
use App\Form\TicketType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;


class TicketController extends AbstractController
{

    #[Route("/eventadmin/{id}/ticket/new", name:"event_ticket_new")]
    public function new(Request $request, EntityManagerInterface $entityManager, Event $event): Response
{
    $ticket = new Ticket();
    $ticket->setEvent($event);
    $form = $this->createForm(AdminTicketType::class, $ticket);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $ticket->setDisponibilite($form->get('disponibilite')->getData());
        $entityManager->persist($ticket);
        $entityManager->flush();

        $this->addFlash('success', 'Ticket added successfully.');

        return $this->redirectToRoute('admin_ticket_index', ['id' => $event->getId()]);
    }

    return $this->render('ticket_admin/new.html.twig', [
        'event' => $event,
        'form' => $form->createView(),
    ]);
}
    #[Route("/ticketadmin", name:"admin_ticket_index")]
   public function index(TicketRepository $ticketRepository): Response
   {
       $tickets = $ticketRepository->findAll();

       return $this->render('ticket_admin/index.html.twig', [
           'tickets' => $tickets,
       ]);
   }
   #[Route('ticketadmin/delete/{id}', name: 'ticket_delete')]
   public function delete(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
   {
       if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
           $entityManager->remove($ticket);
           $entityManager->flush();
       }
   
       return $this->redirectToRoute('admin_ticket_index');
   }

   #[Route('/event/{id}/book', name: 'event_book')]
   public function book(Request $request, $id, TicketRepository $ticketRepository,MailerInterface $mailer, TokenGeneratorInterface $tokenGenerator): Response
   {
       $event = $this->getDoctrine()
           ->getRepository(Event::class)
           ->find($id);
           $ticket = new Ticket();
   
       $form = $this->createForm(TicketType::class);
       $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ticket);
            $entityManager->flush();
            $email = $form->get('email')->getData();




            $path = $this->getParameter('kernel.project_dir').'/public';
            $pathqr = $this->getParameter('kernel.project_dir').'/public/image/png';

            $result=Builder::create()
                ->writer(new PngWriter())
                ->data("Prix : ".$ticket->getPrix()."  |   ")
                ->encoding(new Encoding('UTF-8'))
                ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
                ->size(300)
                ->margin(10)
                ->labelText("")
                ->logoPath($pathqr."/fithub4.png")
                ->labelAlignment(new LabelAlignmentCenter())
                ->labelMargin(new Margin(15, 5, 5, 5))
                ->logoResizeToWidth('100')
                ->logoResizeToHeight('100')
                ->build();


            $namePng =uniqid('',''). '.png';
            $result->saveToFile( $pathqr.'/qr-code/'.$namePng);

            //mailing
            //on cree le message
            $message = (new TemplatedEmail())
                //ili bech yeb3ath
                ->from('fithubg@gmail.com')
                //ili bech ijih l message
                ->to($email)
                ->subject("Confirmation de Reservation")
                ->html("<p>bonjour,". $ticket->getNom()."</p><p> Ceci est une confirmation de votre reservation ". $ticket->getId()."</p><p> Merci pour votre Confiance </p>")
                ->embedFromPath($pathqr.'/qr-code/'.$namePng);
            //on envoi l email
            $mailer->send($message);

            return $this->redirectToRoute('app_event');
        }

        return $this->render('ticket/index.html.twig', [
            'ticket' => $ticket,
            'event' => $event,
            'form' => $form->createView(),
        ]);
   }

    #[Route("ticketadmin/{id}/edit", name:"admin_ticket_edit")]
    public function edit(Request $request, Ticket $ticket): Response
    {
        $form = $this->createForm(AdminTicketType::class, $ticket);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $ticket->setDisponibilite($form->get('disponibilite')->getData());
            $this->getDoctrine()->getManager()->flush();
    
            return $this->redirectToRoute('admin_ticket_index');
        }
    
        return $this->render('ticket_admin/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form->createView(),
        ]);
    }
    #[Route('/event/{eventId}/ticket/{id}/ticketpdf', name: 'event_send_ticket')]
    public function tiketpage(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {

    return $this->render('ticket/ticketpdf.html.twig', [
        'ticket' => $ticket,
        'form' => $form->createView(),
    ]);
}
    
     #[Route("/PDF_Reserver", name:"PDF_Reserver")]
    public function PDF_Reserver(ReservationVoyageRepository $reservationVoyageRepository)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('ticket/pdf.html.twig', [
            'ticket' => $ticketRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("Liste_Des_Reservation_Voyages.pdf", [
            "ticket" => true
        ]);
    }
   
}