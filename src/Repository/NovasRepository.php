<?php

namespace App\Repository;

use App\Entity\Novas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Novas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Novas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Novas[]    findAll()
 * @method Novas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NovasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Novas::class);
    }

    // /**
    //  * @return Novas[] Returns an array of Novas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Novas
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
