<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
	
	#[Route('/connect', name: 'app_connect')]
    public function connect(): Response
    {
        return $this->render('dashboard/connect.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
	
	//fonction qui affiche un formulaire d'insertion : Entreprise
	#[Route('/formInsertEnt', name: 'app_form_insert_ent')]
    public function formInsertEnt(): Response
    {
        return $this->render('dashboard/formInsertEnt.html.twig', [
            'controller_name' => 'Nouvelle entrepise',
        ]);
    }
}














