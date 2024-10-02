<?php

namespace App\Repository;

use App\Entity\Atricle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Atricle>
 *
 * @method Atricle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Atricle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Atricle[]    findAll()
 * @method Atricle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtricleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Atricle::class);
    }

//    /**
//     * @return Atricle[] Returns an array of Atricle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Atricle
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
