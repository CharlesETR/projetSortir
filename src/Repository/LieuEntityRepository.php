<?php

namespace App\Repository;

use App\Entity\LieuEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LieuEntity>
 *
 * @method LieuEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuEntity[]    findAll()
 * @method LieuEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LieuEntity::class);
    }

//    /**
//     * @return LieuEntity[] Returns an array of LieuEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LieuEntity
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
