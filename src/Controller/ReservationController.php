<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Form\ReservationType;
use App\Repository\DishRepository;
use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(
        Request $request, 
        OpeningHoursRepository $openingHoursRepository, 
        EntityManagerInterface $entityManager
    ): Response {
        $reservation = new Reservation();

        $user = $this->getUser();
        $reservation->setUser($user);
        
        /** @var User $user */
        if ($user) {
            $reservation->setEmail($user->getEmail());
            // $reservation->setAllergies($user->getAllergies());
        } 

        $form = $this->createForm(ReservationType::class, $reservation);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation = $form->getData();

            $allergies = $form->get('allergy')->getData();
            foreach ($allergies as $allergy) {
                $reservation->addAllergy($allergy);
            }

            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_success');
        }

        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            'openinghours' => $openingHoursRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
}
