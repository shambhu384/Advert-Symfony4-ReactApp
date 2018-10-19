<?php

namespace App\Repository;

use App\Entity\Puppy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Puppy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Puppy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Puppy[]    findAll()
 * @method Puppy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PuppyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Puppy::class);
    }

//    /**
//     * @return Puppy[] Returns an array of Puppy objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Puppy
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
