<?php

namespace App\Repository;

use App\Entity\CampusEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CampusEntity>
 *
 * @method CampusEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method CampusEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method CampusEntity[]    findAll()
 * @method CampusEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CampusEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CampusEntity::class);
    }

//    /**
//     * @return CampusEntity[] Returns an array of CampusEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CampusEntity
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
