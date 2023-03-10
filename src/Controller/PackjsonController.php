<?php

namespace App\Controller;
use App\Entity\Pack;
use App\Repository\PackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class PackjsonController extends AbstractController
{
    #[Route('/packjson', name: 'app_packjson')]
    public function index(): Response
    {
        return $this->render('packjson/index.html.twig', [
            'controller_name' => 'PackjsonController',
        ]);
    }
    #[Route("/pack_group", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getStudents(PackRepository  $repo, SerializerInterface $serializer)
    {
        $packs = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($packs, 'json', ['groups' => "pack_group"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }
    #[Route("/packjson/{id}", name: "packjson")]
    public function packjsonId($id, NormalizerInterface $normalizer, packRepository $repo)
    {
        $packs = $repo->find($id);
        $packsNormalises = $normalizer->normalize($packs, 'json', ['groups' => "pack_group"]);
        return new Response(json_encode($packsNormalises));
    }
    #[Route("addpackjson/new", name: "addpackjson")]
    public function addpackjson(Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $packs = new Pack();
        $packs->setNomPack($req->get('nomPack'));
        $packs->setPrixPack($req->get('prixPack'));
        $packs->setDureePack($req->get('dureePack'));

        $em->persist($packs);
        $em->flush();

        $jsonContent = $Normalizer->normalize($packs, 'json', ['groups' => 'pack_group']);
        return new Response(json_encode($jsonContent));
    }
    #[Route("updatepackjson/{id}", name: "updatepackjson")]
    public function updatepackjson(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $packs = $em->getRepository(Pack::class)->find($id);
        $packs->setNomPack($req->get('nomPack'));
        $packs->setPrixPack($req->get('prixPack'));
        $packs->setDureePack($req->get('dureePack'));

        $em->flush();

        $jsonContent = $Normalizer->normalize($packs, 'json', ['groups' => 'pack_group']);
        return new Response("pack updated successfully " . json_encode($jsonContent));
    }
    #[Route("deletepackjson/{id}", name: "deletepackjson")]
    public function deletepackjson(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $packs = $em->getRepository(pack::class)->find($id);
        $em->remove($packs);
        $em->flush();
        $jsonContent = $Normalizer->normalize($packs, 'json', ['groups' => 'pack_group']);
        return new Response("Studpackent deleted successfully " . json_encode($jsonContent));
    }
}
