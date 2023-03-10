<?php

use App\Form\EmailType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Response;


class EmailController extends AbstractController
{
    #[Route('/email',name:'send_mail1')]
    public function sendEmail(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(EmailType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $email = (new TemplatedEmail())
                ->from('fithubg@gmail.com')
                ->to($data['recipient'])
                ->subject('Test email')
                ->context([
                    'recipient' => $data['recipient'],
                    'subject' => 'Test email',
                ]);

            $mailer->send($email);

            $this->addFlash('success', 'Email sent successfully!');
            return $this->redirectToRoute('app_pack_index');
        }

        return $this->render('mailer/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}