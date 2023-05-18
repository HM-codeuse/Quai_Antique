<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\OpeningHoursRepository;
use App\Repository\DishRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    #[Route('/gallery', name: 'app_gallery')]
    public function index(DishRepository $dishRepository, OpeningHoursRepository $openingHoursRepository): Response
    {
        return $this->render('gallery/index.html.twig', [
            'controller_name' => 'GalleryController',
            'dishes'=>$dishRepository->findAll(),
            //Je veux afficher les plats de la catégorie spécifiée
            'openinghours'=>$openingHoursRepository->findAll(), 
        ]);
    }
}
