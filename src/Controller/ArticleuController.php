<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\Article1Type;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/articleu')]
class ArticleuController extends AbstractController
{
    #[Route('/', name: 'app_articleu_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository): Response
    {
        return $this->render('articleu/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }

   

    #[Route('/{id}', name: 'app_articleu_show', methods: ['GET'])]
    public function show(Article $article): Response
    {   
        $comments = $article->getCommentaires();
        return $this->render('articleu/show.html.twig', [
            'article' => $article,
            'comments'=> $comments,
        ]);
    }

    
}
