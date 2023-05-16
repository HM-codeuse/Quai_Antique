<?php

namespace App\Repository;

use App\Entity\Dish;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dish>
 *
 * @method Dish|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dish|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dish[]    findAll()
 * @method Dish[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DishRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dish::class);
    }

    public function save(Dish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Dish $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Dish[] Returns an array of Dish objects
     */
    public function lastTree()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }

    public function lastDish()
    {
        return $this->createQueryBuilder('d')
            ->where('d.category = :categoryId')
            ->setParameter('categoryId', 4)
            ->orderBy('d.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function firstDish()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.name', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function carrousselDish()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }

    public function dishesByCategories() {
       return $this->createQueryBuilder('d')
        ->select('d', 'c')
        ->leftJoin('d.category', 'c')
        ->orderBy('c.id', 'ASC') 
        ->addOrderBy('d.id', 'ASC') 
        ->getQuery()
        ->getResult()
    ;
    }
    



//    public function findOneBySomeField($value): ?Dish
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
