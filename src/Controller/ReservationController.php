<?php

namespace App\Controller;

use App\Entity\Slot;
use App\Entity\User;
use App\Entity\Table;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OpeningHoursRepository;
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

        $form = $this->createForm(
            ReservationType::class,
            $reservation, 
            ['user' => $user]);
        
        
        $form->handleRequest($request);


if ($form->isSubmitted() && $form->isValid()) {            
    $reservation = $form->getData();

    $allergies = $form->get('allergy')->getData();
    foreach ($allergies as $allergy) {
        $reservation->addAllergy($allergy);
    }

    // Récupérer le créneau horaire et la date de la réservation depuis le formulaire
    $slot = $reservation->getSlot();
    $Date = $reservation->getDate();

    // Récupérer les tables disponibles depuis le repository de Table
    $tableRepository = $entityManager->getRepository(Table::class);
    $availableTables = $tableRepository->findAvailableTables($slot, $Date);
    
     
     // Vérifier si la table sélectionnée est disponible
     $selectedTable = $reservation->getTable();
     $isTableAvailable = false;
     foreach ($availableTables as $table) {
         if ($table->getId() === $selectedTable->getId()) {
             $isTableAvailable = true;
             break;
         }
     }

     if (!$isTableAvailable) {
         // La table sélectionnée n'est pas disponible, vous pouvez générer une erreur ou rediriger vers une page d'erreur
         $this->addFlash('error', 'Cette table est déjà réservée, veuillez choisir une autre table.');
         return $this->redirectToRoute('app_reservation');
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


