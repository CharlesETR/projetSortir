<?php

namespace App\Repository;

use App\Entity\SortieEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SortieEntity>
 *
 * @method SortieEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method SortieEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method SortieEntity[]    findAll()
 * @method SortieEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SortieEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SortieEntity::class);
    }

//    /**
//     * @return SortieEntity[] Returns an array of SortieEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SortieEntity
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
