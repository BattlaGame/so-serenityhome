<?php

namespace App\Controller;

use App\Entity\Accueil;
use App\Form\AccueilType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function accueil(): Response
    {
        return $this->render('accueil/accueil.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test(): Response
    {
        return $this->render('accueil/test.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/change-locale/{locale}', name: 'app_change-locale')]
    public function changeLocale($locale, Request $request)
    {
        $request ->getSession()->set('_locale',$locale);

        return $this->redirect($request->headers->get('referer'));
    }
    
}

