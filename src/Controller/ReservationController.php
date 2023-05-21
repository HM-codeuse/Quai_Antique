<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\DishRepository;
use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(Request $request, OpeningHoursRepository $openingHoursRepository, EntityManagerInterface $entityManager, DishRepository $dishRepository): Response
    {
        $reservation = new Reservation();

        $form = $this->createForm(ReservationType::class, $reservation);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
        $reservation->getUser();
        $reservation->getEmail();
        $reservation->getDate();
        $reservation->getSlot();
        $reservation->getTable();
        $reservation->getAllergy();


        $entityManager->persist($reservation);
        $entityManager->flush();

        return $this->redirectToRoute('app_home');
    }
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            'openinghours'=>$openingHoursRepository->findAll(),
            'form' => $form->createView(),

        ]);
    }


}
