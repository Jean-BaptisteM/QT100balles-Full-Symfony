<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Item|null find($id, $lockMode = null, $lockVersion = null)
 * @method Item|null findOneBy(array $criteria, array $orderBy = null)
 * @method Item[]    findAll()
 * @method Item[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Item::class);
    }

    /**
     * Returns all items whose name contains the value of $searchTerm
     * 
     * @return Item[] Returns an array of Item objects
     */
    public function findAllItemBySearchTerm($searchTerm)
    {
        return $this->createQueryBuilder('item')
            ->andWhere('item.name LIKE :searchTerm')
            ->orderBy('item.name', 'ASC')
            ->setParameter(':searchTerm', "%$searchTerm%")
            ->getQuery()
            ->getResult();
    }

    /**
     * Returns all items whose year contains the value of $filterYear
     * 
     * @return Item[] Returns an array of Item objects
     */
    public function findAllItemFilterByYear($filterYear)
    {
        return $this->createQueryBuilder('item')
            ->andWhere('item.year LIKE :filterYear')
            ->orderBy('item.name', 'ASC')
            ->setParameter(':filterYear', "%$filterYear%")
            ->getQuery()
            ->getResult();
    }

    

    /*
    public function findOneBySomeField($value): ?Item
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
