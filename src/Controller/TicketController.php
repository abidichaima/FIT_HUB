<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use App\Service\TicketService;
use Dompdf\Dompdf;
use TCPDF;

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
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Annotation\MaxDepth;



use Symfony\Component\HttpFoundation\JsonResponse;


class TicketController extends AbstractController
{


    #[Route('/allTickets', name: 'listt')]
    
    public function getTickets():JsonResponse
    {
        $tickets = $this->getDoctrine()->getRepository(Ticket::class)->findAll();
        function formatDateTime($dateTime)
        {
            return $dateTime->format('Y-m-d H:i:s');
        }

        // Map the seances to an array of events in the required format
        $tickets = array_map(function ($tickets) {
            return [
                'id' => $tickets->getId(),
                'nom' => $tickets->getNom(),
                'prix' => $tickets->getPrix(),
                'NombreMax' => $tickets->getNombreMax(),
                'disponibilite' => $tickets->getNombreMax(),
                'email' => $tickets->getEmail(),


                //'tickets' => $tickets ? $tickets->getEmail() . ' ' . $tickets->getNom() : '',
            ];
        }, $tickets);
        return new JsonResponse($tickets);
        
    }

    #[Route('/ticket/{id}', name: 'ticketjson')]
    public function ticketId($id, SerializerInterface $serializer, TicketRepository $ticketRepository): Response
    {
        $tickets = $ticketRepository->find($id);
        $ticketsArray = [];
    
        if (!$tickets) {
            return new JsonResponse(['message' => 'Ticket not found'], Response::HTTP_NOT_FOUND);
        }
    
        // Map the properties of the ticket to an array
        $ticketsArray[] = [
            'id' => $tickets->getId(),
            'nom' => $tickets->getNom(),
            'prix' => $tickets->getPrix(),
            'nombreMax' => $tickets->getNombreMax(),
            'disponibilite' => $tickets->isDisponibilite(),
            'email' => $tickets->getEmail(),
            'bookingDate' => $tickets->getBookingDate()->format('Y-m-d H:i:s'),
        ];
    
        // Serialize the array to JSON
        $jsonContent = $serializer->serialize($ticketsArray, 'json');
    
        // Create a new JSON response with the formatted data
        return new JsonResponse($jsonContent, Response::HTTP_OK, [], true);
    }
    

    #[Route('/addTicketJSON/new', name: 'addTicketJSON')]
    public function addTicketJSON(Request $req,NormalizerInterface $normalizer): Response
    {
        $em= $this->getDoctrine()->getManager();
        $Ticket = new Ticket();
        $tickets->setNom($req->get('nom'));
        $tickets->setEmail($req->get('email'));
        $tickets->setDisponibilite($req->get('disponibilite'));
        $tickets->setPrix($req->get('prix'));
        $tickets->setNombreMax($req->get('nombreMax'));
        $dateStr = $req->get('bookingDate');
        $date = new \DateTime($dateStr);
        $events->setBookingDate($date);
                
        $em->persist($tickets);
        $em->flush();
        $jsonContent = $normalizer->normalize($tickets,'json',['groups'=>"tickets"]);
        dd($jsonContent);

        return new  Response (json_encode($jsonContent));       
    
    }

    #[Route('/updateTicketJSON/{id}', name: 'updateTicketJSON')]

    public function UpdateTicketJSON($id, Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $tickets = $this->getDoctrine()->getRepository(Ticket::class)->find($id);
        $tickets->setNom($request->get('nom'));
        $tickets->setEmail($request->get('email'));
        $tickets->setDisponibilite($request->get('disponibilite'));
        $tickets->setPrix($request->get('prix'));
        $tickets->setNombreMax($request->get('nombreMax'));
        $dateStr = $request->get('bookingDate');
        $date = new \DateTime($dateStr);
        $tickets->setBookingDate($date);
        $em->flush();
        $jsonContent = $Normalizer->normalize($tickets, 'json', ['groups' => 'post:read']);
        return new Response("Update successfully" . json_encode($jsonContent));
    }

   #[Route('/deleteTicketJSON/{id}', name: 'deleteTicketJSON')]
   public function deleteTicketJSON($id, Request $req, EntityManagerInterface $entityManager): JsonResponse
   {
       $em = $this->getDoctrine()->getManager();
       $ticket = $em->getRepository(Ticket::class)->find($id);
       $em->remove($ticket);
       $em->flush();
   
       return new JsonResponse(['status' => 'success', 'message' => 'Ticket deleted.']);
   }

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
                ->data("id : ".$ticket->getId()."  |  "."Date booking :".$event->getDate()->format("Y/m/d"))
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

            $pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('times', '', 12);
$pdf->WriteHTML("<h1>We hope your ticket finds you well</h1>");

$pdf->WriteHTML("<p>Event Name: {$event->getNomEvent()}</p>");
$pdf->WriteHTML("<p>Ticket Price: {$ticket->getPrix()}</p>");
$pdf->WriteHTML("<p>=please present your ticket at the reception to access the event hall</p>");

$pdf->Image($pathqr.'/qr-code/'.$namePng);
$pdfData = $pdf->Output('', 'S');
            //mailing
            //on cree le message
            $message = (new TemplatedEmail())
                //recipient
                ->from('fithubg@gmail.com')
                //destinataire
                ->to($email)
                ->subject("Confirmation de Reservation")
                ->html("<p>bonjour,". $ticket->getNom()."</p><p> Ceci est une confirmation de votre reservation ". $ticket->getId()."</p><p> Merci pour votre Confiance </p>". $ticket->getNom().  "<p> Coridalement <br/> Fithub team </p>")
                ->attach($pdfData, 'ticket.pdf', 'application/pdf')
                ->embedFromPath($pathqr.'/qr-code/'.$namePng);
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