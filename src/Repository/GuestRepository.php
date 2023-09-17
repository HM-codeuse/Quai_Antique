<?php

namespace App\Repository;

use App\Entity\Guest;
use App\Entity\Slot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Guest>
 *
 * @method Guest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Guest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Guest[]    findAll()
 * @method Guest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GuestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Guest::class);
    }

    public function save(Guest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Guest $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // /**
    //  * @param Slot $slot
    //  * @param \DateTimeInterface $Date
    //  * @return Guest[]
    //  */
    // public function findAvailableGuests(Slot $slot, \DateTimeInterface $Date)
    // {
    //     $reservedGuests = $this->createQueryBuilder('t')
    //         ->select('t.id')
    //         ->leftJoin('t.reservation', 'r')
    //         ->andWhere('r.slot = :slot')
    //         ->andWhere('r.Date = :Date')
    //         ->setParameters([
    //             'slot' => $slot,
    //             'Date' => $Date,
    //         ])
    //         ->getQuery()
    //         ->getResult();

    //     $reservedGuestIds = array_column($reservedGuests, 'id');

    //     if (empty($reservedGuestIds)) {
    //         return $this->findAll();
    //     }

    //     return $this->createQueryBuilder('t')
    //         ->where('t.id NOT IN (:reservedGuestIds)')
    //         ->setParameter('reservedGuestIds', $reservedGuestIds)
    //         ->getQuery()
    //         ->getResult();
    // }

    // /**
    //  * @param int $slot
    //  * @param \DateTimeInterface $Date
    //  * @return Guest[]
    //  */
    // public function findAvailableGuestsBySlotId(int $slot, \DateTimeInterface $Date)
    // {
    //     $reservedGuests = $this->createQueryBuilder('t')
    //         ->select('t.id')
    //         ->leftJoin('t.reservation', 'r')
    //         ->Join('r.slot', 's')
    //         ->andWhere('s.id = :slot')
    //         ->andWhere('r.Date = :Date')
    //         ->setParameters([
    //             'slot' => $slot,
    //             'Date' => $Date,
    //         ])
    //         ->getQuery()
    //         ->getResult();

    //     $reservedGuestIds = array_column($reservedGuests, 'id');

    //     if (empty($reservedGuestIds)) {
    //         return $this->findAll();
    //     }

    //     return $this->createQueryBuilder('t')
    //         ->where('t.id NOT IN (:reservedGuestIds)')
    //         ->setParameter('reservedGuestIds', $reservedGuestIds)
    //         ->getQuery()
    //         ->getResult();
    // }

//    /**
//     * @return Guest[] Returns an array of Guest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Guest
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    /**
     * @param Slot $slot
     * @param \DateTimeInterface $Date
     * @return int
     */
    public function findAvailableGuests(Slot $slot, \DateTimeInterface $Date)
    {
        {
            $query = $this->createQueryBuilder('g')
                ->select('g.numberOfSettings') // Sélectionnez le nombre de réglages des invités
                ->innerJoin('g.reservation', 'r') // Effectuez une jointure interne avec la table Reservation
                ->andWhere('r.slot = :slot')
                ->andWhere('r.Date = :Date')
                ->setParameters([
                    'slot' => $slot,
                    'Date' => $Date,
                ])
                ->getQuery();
        
            // Exécutez la requête pour obtenir le nombre total de réglages des invités
            $totalGuestSettings = $query->getResult();
        
            // Calculez la somme des réglages de tous les invités
            $reservedGuestsCount = array_sum(array_column($totalGuestSettings, 'numberOfSettings'));
        
            return $reservedGuestsCount;
        } 

}
}
