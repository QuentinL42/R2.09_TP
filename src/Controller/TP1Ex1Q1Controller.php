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

    #[Route('/mysql', name: 'mysql')]
    public function mysql(): Response
    {
        return $this->render('tp1/mysql.html.twig');
    }
    
    #[Route('/connexion', name: 'connexion')]
    public function connexion(): Response
    {
        return $this->render('tp1/connexion.html.twig');
    }
    
    #[Route('/verification', name: 'verification', methods: ['POST'])]
    public function verification(Request $request): Response
    {
        $login = $request->request->get('login');
        $motdepasse = $request->request->get('motdepasse');
        $pdo = new \PDO('mysql:host=127.0.0.1;dbname=tp1;charset=utf8', 'root', '');
        $sql = "SELECT * FROM informationsconnexion 
        WHERE login = '$login' AND motdepasse = '$motdepasse'";
        $resultat = $pdo->query($sql);
        if ($resultat && $resultat->rowCount() > 0) 
            {
                return $this->redirectToRoute('salut', ['login' => $login]);
            }
            return new Response("Échec de connexion");
    }
    #[Route('/salut/{login}', name: 'salut')]
    public function salut(string $login): Response
    {
        return $this->render('tp1/salut.html.twig', 
        ['login' => $login]);
    }
 
}