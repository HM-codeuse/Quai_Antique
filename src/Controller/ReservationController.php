<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Slot;
use App\Entity\User;
use App\Form\ReservationType;
use App\Repository\OpeningHoursRepository;
use App\Repository\TableRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation', name: 'app_reservation')]
    public function index(
        Request $request,
        OpeningHoursRepository $openingHoursRepository,
        TableRepository $tableRepository,
        EntityManagerInterface $entityManager
    ): Response{
        $reservation = new Reservation();
        $user = $this->getUser();

        /** @var User $user */
        if ($user) {
            $reservation->setUser($user);
            $reservation->setEmail($user->getEmail());
        }

        $form = $this->createForm(
            ReservationType::class,
            $reservation,
            ['user' => $user]);

        $form->handleRequest($request);


// // Récupérer les tables disponibles depuis le repository de Table
//         $tableRepository = $entityManager->getRepository(Table::class);
//         $availableTables = $tableRepository->findAvailableTables($slot, $Date);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation = $form->getData();

            $allergies = $form->get('allergy')->getData();
            foreach ($allergies as $allergy) {
                $reservation->addAllergy($allergy);
            }

            // Vérifier si la table sélectionnée est disponible
            $selectedTable = $reservation->getTable();
            // // Récupérer le créneau horaire et la date de la réservation depuis le formulaire
            $slot = $reservation->getSlot();
            $Date = $reservation->getDate();
            $availableTables = $tableRepository->findAvailableTables($slot, $Date);
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


    #[Route('/get-available-tables', name: 'get_available_tables')]
public function getAvailableTables(
    Request $request, 
    TableRepository $tableRepository)
{
    
     // Gérer la requête AJAX pour la mise à jour des tables disponibles
            //Je récupère les 2 paramètres du formulaire que j'ai passé dans l'AJAX du js
                 $selectedDate = $request->query->get('date');
                 $selectedSlot = $request->query->get('slot');
     
                 // Récupérer les tables disponibles en faisant un tri par l'identifiant de l'horaire via fonction définie dans tablerepo
                 $availableTables = $tableRepository->findAvailableTablesBySlotId($selectedSlot, new \DateTime($selectedDate));
                 
                 $tablesData = [];
                 foreach ($availableTables as $table) {
                     $tablesData[] = [
                         'id' => $table->getId(),
                         'numberOfSettings' => $table->getNumberOfSettings()
                     ];
                 }
     
                 return new JsonResponse(['tables' => $tablesData]);
            }}