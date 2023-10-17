<?php

namespace App\Repository;

use App\Entity\ParticipantEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ParticipantEntity>
 *
 * @method ParticipantEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParticipantEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParticipantEntity[]    findAll()
 * @method ParticipantEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipantEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParticipantEntity::class);
    }

//    /**
//     * @return ParticipantEntity[] Returns an array of ParticipantEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ParticipantEntity
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
