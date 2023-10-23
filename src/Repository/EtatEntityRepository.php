<?php

namespace App\Repository;

use App\Entity\EtatEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EtatEntity>
 *
 * @method EtatEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtatEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtatEntity[]    findAll()
 * @method EtatEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtatEntity::class);
    }

//    /**
//     * @return EtatEntity[] Returns an array of EtatEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EtatEntity
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
