<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Form\Utilisateur1Type;
use App\Form\LoginType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;



#[Route('/utilisateur')]
class UtilisateurController extends AbstractController
{

    #[Route('/acceuil', name: 'app_utilisateur_acceuil', methods: ['GET'])]
    public function acceuil(): Response
    {
        return $this->render('utilisateur/acceuil.html.twig', [
           
        ]);
    }

    #[Route('/login', name: 'app_utilisateur_login', methods: ['GET', 'POST'])]
    public function login(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/acceuil.html.twig', [
           
        ]);
    }
       
     
    //ajout 
    
    #[Route('/new', name: 'app_utilisateur_new', methods: ['GET', 'POST'])]
    public function new( Request $request,utilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         $utilisateurRepository->save($utilisateur, true);

        return $this->redirectToRoute('app_utilisateur_new');
     }

       return $this->renderForm('utilisateur/new.html.twig', [
        'utilisateur' => $utilisateur,
        'form' => $form,
    ]);

                   
            
    }
    
    
    //list des utilisateurs
    #[Route('/', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

     //ajout utilisateur
    #[Route('/add', name: 'app_utilisateur_add', methods: ['GET', 'POST'])]
    public function add( Request $request,utilisateurRepository $utilisateurRepository): Response
    
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(Utilisateur1Type::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);


            return $this->redirectToRoute('app_utilisateur_acceuil');
         }
    
         
           
        
            return $this->render('utilisateur/add.html.twig', [
                'utilisateur' => $form->createView(),
            ]);
            }
    
        //visualiser par id (recherche)
    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        
        
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }



    //modifier par id 
    #[Route('/{id}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }
//suppression
    #[Route('/{id}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        

        
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur, true);
        }
        return $this->redirectToRoute('app_utilisateur_index');

    }
    
}
