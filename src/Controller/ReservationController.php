<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Slot;
use App\Entity\User;
use App\Form\ReservationType;
use App\Repository\GuestRepository;
use App\Repository\OpeningHoursRepository;
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
        GuestRepository $guestRepository,
        EntityManagerInterface $entityManager
    ): Response {

        $reservation = new Reservation();
        $user = $this->getUser();

        //Je mets à jour le nom et l'email de l'utilisateur en les récupérant vu qu'il est connecté
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

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation = $form->getData();

            $allergies = $form->get('allergy')->getData();
            foreach ($allergies as $allergy) {
                $reservation->addAllergy($allergy);
            }

            // Vérifier si le nombre de convives sélectionné est disponible
            $selectedGuest = $reservation->getGuest();
            $slot = $reservation->getSlot();
            $Date = $reservation->getDate();
            $reservedGuestsCount = $guestRepository->findAvailableGuests($slot, $Date);
            $availableGuests = 20 - $reservedGuestsCount;
            
            //dump($availableGuests); // Affichez la valeur de $availableGuests
            //die();

            if ($selectedGuest->getNumberOfSettings() <= $availableGuests) {
                // Le nombre de convives est disponible, continuez le traitement
                $entityManager->persist($reservation);
                $entityManager->flush();

                return $this->redirectToRoute('app_reservation_success');
            } else {
                // Le nombre de convives n'est pas disponible
                $this->addFlash('error', 'Aucune réservation disponible pour ce créneau, veuillez changer votre réservation');
                return $this->redirectToRoute('app_reservation');
            }
        }

        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
            'openinghours' => $openingHoursRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }

    #[Route('/get-available-guests', name: 'get_available_guests')]
    public function getAvailableGuests(
        Request $request,
        GuestRepository $guestRepository,
        EntityManagerInterface $entityManager
    ) {
        try {
            $selectedDate = $request->query->get('date');
            $selectedSlotId = $request->query->get('slot'); // Obtenez l'ID du slot depuis la requête GET

            // Récupérez l'entité Slot correspondante à partir de l'ID
            $selectedSlot = $entityManager->getRepository(Slot::class)->find($selectedSlotId);
            $availableGuestsCount = $guestRepository->findAvailableGuests($selectedSlot, new \DateTime($selectedDate));

            return new JsonResponse($availableGuestsCount);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }
}
