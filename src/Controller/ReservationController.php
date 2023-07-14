<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Table;
use App\Form\ReservationType;
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
                
        /** @var User $user */
        if ($user) {
            $reservation ->setUser($user);
            $reservation->setEmail($user->getEmail());
        } 

        $form = $this->createForm(ReservationType::class, $reservation, ['user' => $user]);
        
        
        $form->handleRequest($request);

        // ... verification nombre reservation

if ($form->isSubmitted() && $form->isValid()) {            
    $reservation = $form->getData();

    $allergies = $form->get('allergy')->getData();
    foreach ($allergies as $allergy) {
        $reservation->addAllergy($allergy);
    }

    
    // Récupérer l'entité de la table correspondante à la réservation
    $table = $reservation->getTable(); // Remplacez "getTable()" par la méthode pour récupérer la table de votre réservation
    $table->setStatus('réservée');
    $table->setSlot($reservation->getSlot()); // Remplacez "getSlot()" par la méthode pour récupérer le créneau horaire de votre réservation
    $table->setDate($reservation->getDate()); // Remplacez "getDate()" par la méthode pour récupérer la date de votre réservation
    
    $entityManager->persist($reservation);
    $entityManager->flush();

    return $this->redirectToRoute('app_reservation_success');
}

// ...


        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            'openinghours' => $openingHoursRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
}


