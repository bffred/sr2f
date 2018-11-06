<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @return Response
     */

    public function admin(): Response 
    {
        return $this->render('admin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}