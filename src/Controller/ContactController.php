<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OpeningHoursRepository;


class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(OpeningHoursRepository $openingHoursRepository): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'openinghours'=>$openingHoursRepository->findAll(), 
            
        ]);
    }
}
