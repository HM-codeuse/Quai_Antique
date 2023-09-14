<?php

namespace App\Repository;

use App\Entity\Slot;
use App\Entity\Table;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Table>
 *
 * @method Table|null find($id, $lockMode = null, $lockVersion = null)
 * @method Table|null findOneBy(array $criteria, array $orderBy = null)
 * @method Table[]    findAll()
 * @method Table[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Table::class);
    }

    public function save(Table $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Table $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @param Slot $slot
     * @param \DateTimeInterface $Date
     * @return Table[]
     */
    public function findAvailableTables(Slot $slot, \DateTimeInterface $Date)
    {
        $reservedTables = $this->createQueryBuilder('t')
            ->select('t.id')
            ->leftJoin('t.reservation', 'r')
            ->andWhere('r.slot = :slot')
            ->andWhere('r.Date = :Date')
            ->setParameters([
                'slot' => $slot,
                'Date' => $Date,
            ])
            ->getQuery()
            ->getResult();

        $reservedTableIds = array_column($reservedTables, 'id');

        if (empty($reservedTableIds)) {
            return $this->findAll();
        }

        return $this->createQueryBuilder('t')
            ->where('t.id NOT IN (:reservedTableIds)')
            ->setParameter('reservedTableIds', $reservedTableIds)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param int $slot
     * @param \DateTimeInterface $Date
     * @return Table[]
     */
    public function findAvailableTablesBySlotId(int $slot, \DateTimeInterface $Date)
    {
        $reservedTables = $this->createQueryBuilder('t')
            ->select('t.id')
            ->leftJoin('t.reservation', 'r')
            ->Join('r.slot', 's')
            ->andWhere('s.id = :slot')
            ->andWhere('r.Date = :Date')
            ->setParameters([
                'slot' => $slot,
                'Date' => $Date,
            ])
            ->getQuery()
            ->getResult();

        $reservedTableIds = array_column($reservedTables, 'id');

        if (empty($reservedTableIds)) {
            return $this->findAll();
        }

        return $this->createQueryBuilder('t')
            ->where('t.id NOT IN (:reservedTableIds)')
            ->setParameter('reservedTableIds', $reservedTableIds)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Table[] Returns an array of Table objects
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

//    public function findOneBySomeField($value): ?Table
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
