<?php

namespace App\Controller;

use App\Entity\Serie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_home')]
    //annottation interprétable
    /**
     * @Route("/home", name="main_home2")
     */
    public function home(): Response
    {
        return $this->render("main/home.html.twig");
    }
    #[Route('/test', name: 'test_home')]
    public function test(): Response
    {
        $serie = new Serie();
        $serie
            ->setBackdrop("backdrop.png")
            ->setDateCreated(new \DateTime())
            ->setGenres("Thriller/Drama")
            ->setName("Utopia")
            ->setFirstAirDate(new \DateTime("-2 year"))
            ->setLastAirDate(new \DateTime("-2 month"))
            ->setPopularity(500)
            ->setPoster("poset.png")
            ->setStatus("Canceled")
            ->setTmdbId(123456)
            ->setVote(5);

        dump($serie);

        /* //sauvegarde de mon instance grace à l'entityManager
         $entityManager->persist($serie);
         $entityManager->flush();

         dump($serie);

         //si j'ai un id j'update
         $serie->setName("Code Quantum");
         $entityManager->persist($serie);
         $entityManager->flush();

         dump($serie);

         //je supprime
         $entityManager->remove($serie);
         $entityManager->flush();*/

        //même resultat juste plus court
       /* $serieRepository->save($serie,true);

        dump($serie);*/

        return $this->render("main/test.html.twig",[
            "serie" => $serie
        ]);
    }
}
