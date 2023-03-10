<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Repository\AbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class AbonnementjsonController extends AbstractController
{
    #[Route('/abonnementjson', name: 'app_abonnementjson')]
    public function index(): Response
    {
        return $this->render('abonnementjson/index.html.twig', [
            'controller_name' => 'AbonnementjsonController',
        ]);
    }
    #[Route("/abonnements", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getabonnements(abonnementRepository $repo, SerializerInterface $serializer)
    {
        $abonnements = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($abonnements, 'json', ['groups' => "abonnements"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }
    #[Route("/abonnementjson/{id}", name: "packjson")]
    public function packjsonId($id, NormalizerInterface $normalizer, packRepository $repo)
    {
        $packs = $repo->find($id);
        $packsNormalises = $normalizer->normalize($packs, 'json', ['groups' => "abonnements"]);
        return new Response(json_encode($packsNormalises));
    }
    #[Route("addabonnementjson/new", name: "addabonnementjson")]
    public function addabonnementjson(Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $abonnements = new Abonnement();
        $abonnements->setnomAbonnement($req->get('nomAbonnement'));
        $abonnements->setdateDebut ($req->get('dateDebut '));
        $abonnements->setdateFin($req->get('dateFin'));
        $abonnements->setdateFin($req->get('dateFin'));
        $abonnements->setdateFin($req->get('dateFin'));
        $abonnements->setdateFin($req->get('dateFin'));

        $em->persist($packs);
        $em->flush();

        $jsonContent = $Normalizer->normalize($packs, 'json', ['groups' => 'abonnements']);
        return new Response(json_encode($jsonContent));
    }
}
