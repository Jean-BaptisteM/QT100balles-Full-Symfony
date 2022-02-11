<?php

namespace App\Repository;

use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Media|null find($id, $lockMode = null, $lockVersion = null)
 * @method Media|null findOneBy(array $criteria, array $orderBy = null)
 * @method Media[]    findAll()
 * @method Media[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Media::class);
    }


    /**
     * Returns all medias whose title contains the value of $searchTerm
     * 
     * @return Media[] Returns an array of Media objects
     */
    public function findAllMediaBySearchTerm($searchTerm)
    {
        return $this->createQueryBuilder('media')
            ->andWhere('media.title LIKE :searchTerm')
            ->orderBy('media.title', 'ASC')
            ->setParameter(':searchTerm', "%$searchTerm%")
            ->getQuery()
            ->getResult();
    }

    /**
     * Returns all medias whose year contains the value of $filterYear
     * 
     * @return Media[] Returns an array of Media objects
     */
    public function findAllMediaFilterByYear($filterYear)
    {
        return $this->createQueryBuilder('media')
            ->andWhere('media.year LIKE :filterYear')
            ->orderBy('media.title', 'ASC')
            ->setParameter(':filterYear', "%$filterYear%")
            ->getQuery()
            ->getResult();
    }

    /**
     * Returns all medias whose year contains the value of $filterType
     * 
     * @return Media[] Returns an array of Media objects
     */
    public function findAllMediaFilterByType($filterType)
    {
        return $this->createQueryBuilder('media')
        // I get the field i need for the comparison by doing a leftjoin with the type table
            ->leftJoin('media.types', 'type')
            ->andWhere('type.name LIKE :filterType')
            ->orderBy('media.title', 'ASC')
            ->setParameter(':filterType', "%$filterType%")
            ->getQuery()
            ->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Media
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
