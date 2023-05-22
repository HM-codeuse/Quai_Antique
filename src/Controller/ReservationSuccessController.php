<?php

namespace App\Controller;

use App\Repository\OpeningHoursRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationSuccessController extends AbstractController
{
    #[Route('/reservation/success', name: 'app_reservation_success')]
    public function index(OpeningHoursRepository $openingHoursRepository, ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation_success/index.html.twig', [
            'controller_name' => 'ReservationSuccessController',
            'openinghours'=>$openingHoursRepository->findAll(),
            'reservations'=>$reservationRepository->findAll(),
        ]);
    }
}
