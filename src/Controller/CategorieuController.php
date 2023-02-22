<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\Categorie1Type;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorieu')]
class CategorieuController extends AbstractController
{
    #[Route('/', name: 'app_categorieu_index', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorieu/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

   
    #[Route('/{id}', name: 'app_categorieu_show', methods: ['GET'])]
    public function show(Categorie $categorie): Response
    {   $articles = $categorie->getArticles();
        return $this->render('categorieu/show.html.twig', [
            'categorie' => $categorie,
            'articles'=>$articles,
        ]);
    }

    
}
