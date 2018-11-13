<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    
    /**
     * @Route("/", name="home")
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('pages/home.html.twig');
    }



    /**
     * @Route("/Portail_Pro", name="Portail_Pro")
     * @return Response
     */

    public function Portail_Pro(): Response
    {
        return $this->render('pages/portail.pro.html.twig');
    }


}