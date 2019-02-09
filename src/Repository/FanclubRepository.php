<?php

namespace App\Repository;

use App\Entity\Fanclub;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fanclub|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fanclub|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fanclub[]    findAll()
 * @method Fanclub[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FanclubRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fanclub::class);
    }

    // /**
    //  * @return Fanclub[] Returns an array of Fanclub objects
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
    public function findOneBySomeField($value): ?Fanclub
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
