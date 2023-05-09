<?php

namespace App\Controller;

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
        return $this->render("main/test.html.twig");
    }
}
