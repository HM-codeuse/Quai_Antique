<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\OpeningHoursRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(OpeningHoursRepository $openingHoursRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'openinghours'=>$openingHoursRepository->findAll(), 

        ]);
    }
}
