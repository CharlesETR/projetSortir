<?php

namespace App\Repository;

use App\Entity\VilleEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VilleEntity>
 *
 * @method VilleEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method VilleEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method VilleEntity[]    findAll()
 * @method VilleEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VilleEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VilleEntity::class);
    }

//    /**
//     * @return VilleEntity[] Returns an array of VilleEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VilleEntity
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
