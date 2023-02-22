<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Form\Commentaire1Type;
use App\Repository\CommentaireRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/article/{id}/commentaireu')]
class CommentaireuController extends AbstractController
{

    #[Route('/new', name: 'app_commentaireu_new', methods: ['GET', 'POST'])]
    public function new(Request $request,Article $article ,CommentaireRepository $commentaireRepository): Response
    {
        $commentaire = new Commentaire();
        $commentaire ->setDateCommentaire(new DateTimeImmutable());
        $commentaire->setArticle($article);
        $form = $this->createForm(Commentaire1Type::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaireRepository->save($commentaire, true);

            return $this->redirectToRoute('app_articleu_show', [
                'id'=>$article->getId()
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commentaireu/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form,
        ]);
    }

}
