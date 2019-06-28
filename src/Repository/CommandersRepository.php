<?php

namespace App\Repository;

use App\Entity\Commanders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Commanders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commanders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commanders[]    findAll()
 * @method Commanders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Commanders::class);
    }

    // /**
    //  * @return Commanders[] Returns an array of Commanders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Commanders
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
