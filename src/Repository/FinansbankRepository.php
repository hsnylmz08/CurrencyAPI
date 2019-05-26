<?php

namespace App\Repository;

use App\Entity\Finansbank;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Finansbank|null find($id, $lockMode = null, $lockVersion = null)
 * @method Finansbank|null findOneBy(array $criteria, array $orderBy = null)
 * @method Finansbank[]    findAll()
 * @method Finansbank[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinansbankRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Finansbank::class);
    }

    // /**
    //  * @return Finansbank[] Returns an array of Finansbank objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Finansbank
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
