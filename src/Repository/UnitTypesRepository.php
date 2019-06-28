<?php

namespace App\Repository;

use App\Entity\UnitTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UnitTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnitTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnitTypes[]    findAll()
 * @method UnitTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnitTypesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UnitTypes::class);
    }

    // /**
    //  * @return UnitTypes[] Returns an array of UnitTypes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnitTypes
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
