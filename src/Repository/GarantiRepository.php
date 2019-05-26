<?php

namespace App\Repository;

use App\Entity\Garanti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Garanti|null find($id, $lockMode = null, $lockVersion = null)
 * @method Garanti|null findOneBy(array $criteria, array $orderBy = null)
 * @method Garanti[]    findAll()
 * @method Garanti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GarantiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Garanti::class);
    }

    // /**
    //  * @return Garanti[] Returns an array of Garanti objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Garanti
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
