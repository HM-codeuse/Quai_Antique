<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\OpeningHoursRepository;
use App\Repository\DishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DishController extends AbstractController
{
    #[Route('/dishes', name: 'app_dishes')]
    public function index(CategoryRepository $categoryRepository, DishRepository $dishRepository, OpeningHoursRepository $openingHoursRepository): Response
    {
        return $this->render('dish/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
            'dishes'=>$dishRepository->findAll(),
            //Je veux afficher les plats de la catégorie spécifiée
            'openinghours'=>$openingHoursRepository->findAll(), 
            'lastdish'=>$dishRepository-> lastDish(),

        ]);
    }
}
