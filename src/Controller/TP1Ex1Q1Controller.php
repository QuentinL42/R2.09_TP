<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TP1Ex1Q1Controller extends AbstractController
{
    #[Route('/t/p1/ex1/q1', name: 'app_t_p1_ex1_q1')]
    public function index(): Response
    {
        return $this->render('tp1_ex1_q1/index.html.twig', [
            'controller_name' => 'TP1Ex1Q1Controller',
        ]);
    }
}
