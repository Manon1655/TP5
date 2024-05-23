<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_accueil", methods={"GET"})
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig');
    }
}
