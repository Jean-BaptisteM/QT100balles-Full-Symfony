<?php

namespace App\Repository;

use App\Entity\CommentMedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommentMedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentMedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentMedia[]    findAll()
 * @method CommentMedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentMediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentMedia::class);
    }

    // /**
    //  * @return CommentMedia[] Returns an array of CommentMedia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommentMedia
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
