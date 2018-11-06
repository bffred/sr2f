<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;;

class RegisterController extends AbstractController
{
    /**
     * @Route("/admin", name="register")
     * @return Response
     */

    public function register(): Response
    {
        return $this->render('register.html.twig', [
            'controller_name' => 'RegisterController',
        ]);
    }
}