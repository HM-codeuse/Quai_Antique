<?php

namespace App\Controller;

use App\Repository\DishRepository;
use App\Repository\OpeningHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(DishRepository $dishRepository,  OpeningHoursRepository $openingHoursRepository): Response
    {
        return $this->render('home/index.html.twig', [
           'lasttree'=>$dishRepository ->lastTree(),
           'openinghours'=>$openingHoursRepository->findAll(),
           'lastdish'=>$dishRepository-> lastDish(),
           'oneentry'=>$dishRepository->oneEntry(),
           'onedish'=>$dishRepository->oneDish(),
           'onedessert'=>$dishRepository->oneDessert()


        ]);
    }
}
