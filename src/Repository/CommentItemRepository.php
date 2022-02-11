<?php

namespace App\Repository;

use App\Entity\CommentItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommentItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentItem[]    findAll()
 * @method CommentItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentItem::class);
    }

    // /**
    //  * @return CommentItem[] Returns an array of CommentItem objects
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
    public function findOneBySomeField($value): ?CommentItem
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
