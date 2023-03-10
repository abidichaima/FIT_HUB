<?php



namespace App\Controller;

use App\Entity\Pack;
use App\Entity\Abonnement;
use App\Form\PackType;
use App\Repository\PackRepository;
use App\Repository\AbonnementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;


use App\Form\EmailType;

#[Route('/pack')]
class PackController extends AbstractController
{
    #[Route('/', name: 'app_pack_index', methods: ['GET'])]
    public function index(PackRepository $packRepository): Response
    {
        return $this->render('pack/index.html.twig', [
            'packs' => $packRepository->findAll(),
        ]);
    }

    #[Route('/packfront', name: 'app_pack_index_front', methods: ['GET'])]
    public function indexfront(
        PackRepository $packRepository,
        Request $request,
        PaginatorInterface $paginator): Response
    {
        $donnees = $packRepository->findAll();

        $packs=$paginator->paginate(
            $donnees,
            $request->query->getInt('page',1),
            3
        );

        return $this->render('pack/indexfront.html.twig', [
            'packs' => $packs,
        ]);
    }

    #[Route('/new', name: 'app_pack_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PackRepository $packRepository): Response
    {
        $pack = new Pack();
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $packRepository->save($pack, true);

            return $this->redirectToRoute('app_pack_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pack/new.html.twig', [
            'pack' => $pack,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pack_show', methods: ['GET'])]
    public function show(Pack $pack): Response
    {
        return $this->render('pack/show.html.twig', [
            'pack' => $pack,
        ]);
    }

    #[Route('/packfrontshow/{id}', name: 'app_pack_show_front', methods: ['GET'])]
    public function showfront(Pack $pack,AbonnementRepository $repo): Response
    {
        $abonnements = $repo->findBy(['pack' => $pack]);
        return $this->render('pack/showfront.html.twig', [
            'pack' => $pack,
            'abonnements' =>$abonnements
        ]);
    }
    #[Route('/packfrontshow/{id}/Mail', name: 'send_mail', methods: ['GET','POST'])]
    public function showmail(Request $request )
    {
        $form = $this->createForm(EmailType::class);
        $form->handleRequest($request);
        
        return $this->render('mailer/index.html.twig', [
            
                   'form' => $form->createView(),
        ]);
    }

  
    #[Route('/{id}/edit', name: 'app_pack_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pack $pack, PackRepository $packRepository): Response
    {
        $form = $this->createForm(PackType::class, $pack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $packRepository->save($pack, true);

            return $this->redirectToRoute('app_pack_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pack/edit.html.twig', [
            'pack' => $pack,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_pack_delete', methods: ['POST'])]
    public function delete(Request $request, Pack $pack, PackRepository $packRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pack->getId(), $request->request->get('_token'))) {
            $packRepository->remove($pack, true);
        }

        return $this->redirectToRoute('app_pack_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/packfrontshow/searchPack/search', name: 'searchPack')]
    public function searchPack(PackRepository $packRepository, Request $request, NormalizerInterface $Normalizer): Response
    {

        $data =$request->get('searchValue');

        $p = "gold";
        $pack = $packRepository->searchPack($data);
       // $pack = $packRepository->findAll();
        
        $json = $Normalizer->normalize($pack, 'json', ['groups' => 'pack_group']);

        $jsonString = json_encode($json);


        return new Response($jsonString);
        
    }
    #[Route('pack/pdf/{id}', name: 'PDF_pack')]
    public function pdf(PackRepository $Repository,$id)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Open Sans');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $pack = $Repository->find($id);
        $html = $this->renderView('pack/PDF.html.twig', [
            'pack' => [$pack],
        ]);

        // Add header HTML to $html variable
        $headerHtml = '<h1 style="text-align: center; color: #b00707;">Notre Pack </h1>';
        $html = $headerHtml . $html;

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        // Send the PDF to the browser
        $response = new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Monpack.pdf"',
        ]);

        return $response;
    }
}
