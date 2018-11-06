<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ForgotPasswordController extends AbstractController
{
    /**
     * @Route("/admin", name="forgot_password")
     * @return Response
     */
    
    public function forgotPassword(): Response
    {
        return $this->render('forgot-password.html.twig', [
            'controller_name' => 'ForgotPasswordController',
        ]);
    }
}