<?php

namespace App\Repository;

use App\Entity\PendingApprove;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PendingApprove>
 *
 * @method PendingApprove|null find($id, $lockMode = null, $lockVersion = null)
 * @method PendingApprove|null findOneBy(array $criteria, array $orderBy = null)
 * @method PendingApprove[]    findAll()
 * @method PendingApprove[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PendingApproveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PendingApprove::class);
    }

    //    /**
    //     * @return PendingApprove[] Returns an array of PendingApprove objects
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

    //    public function findOneBySomeField($value): ?PendingApprove
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
