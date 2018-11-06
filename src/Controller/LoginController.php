<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class LoginController extends AbstractController
{
    /**
     * @Route("/admin", name="login")
     * @return Response
     */

    public function login(): Response
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}