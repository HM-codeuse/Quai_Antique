<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Repository\DishRepository;

use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'app_menu')]
    public function index(DishRepository $dishRepository, MenuRepository $menuRepository, OpeningHoursRepository $openingHoursRepository):Response
    {
        return $this->render('menu/index.html.twig', [
            'menus' => $menuRepository->findAll(),
            'openinghours'=>$openingHoursRepository->findAll(), 
            'firstdish'=>$dishRepository-> firstDish(),

        ]);
    }
}
