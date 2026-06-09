<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TP1Ex1Q1Controller extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('tp1/accueil.html.twig');
    }

    #[Route('/date1', name: 'date1')]
    public function date1(): Response
    {
        $dateDuJour = date('d/m/Y H:i:s');

        return $this->render('tp1/date1.html.twig', [
            'dateDuJour' => $dateDuJour
        ]);
    }

    #[Route('/date2', name: 'date2')]
    public function date2(): Response
    {
        return $this->render('tp1/date2.html.twig');
    }

    #[Route('/bonjour', name: 'bonjour', methods: ['POST'])]
    public function bonjour(Request $request): Response
    {
        $prenom = $request->request->get('prenom');
        $nom = $request->request->get('nom');

        return $this->render('tp1/bonjour.html.twig', [
            'prenom' => $prenom,
            'nom' => $nom,
            'dateDuJour' => date('d/m/Y H:i:s')
        ]);
    }
    
    #[Route('/javascript', name: 'javascript')]
    public function javascript(): Response
    {
        return $this->render('tp1/javascript.html.twig');
    }

        #[Route('/javascript_Test', name: 'javascript_test')]
    public function javascript_test(): Response
    {
        return $this->render('tp1/javascript_Test.html.twig');
    }

    #[Route('/jquery', name: 'jquery')]
    public function jquery(): Response
    {
        return $this->render('tp1/jquery.html.twig');
    }
    
}