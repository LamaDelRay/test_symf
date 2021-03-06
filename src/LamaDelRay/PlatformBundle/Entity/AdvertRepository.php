<?php

namespace LamaDelRay\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\queryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends EntityRepository
{

	public function getPublishedQueryBuilder()
	{
		return $this->createQueryBuilder('a')->where('a.published = :published')->setParameter('published', true);
	}

	public function getAdverts($page, $nbPerPage)
	{
		$query = $this->createQueryBuilder('a')
		->leftJoin('a.image', 'i')->addSelect('i')
		->leftJoin('a.categories', 'c')->addSelect('c')
		->orderBy('a.date', 'DESC')->getQuery();
		$query->setFirstResult(($page-1) * $nbPerPage)->setMaxResults($nbPerPage);
		return new Paginator($query, true);
	}

	public function myFindAll()
	{
		$queryBuilder = $this->createQueryBuilder('a');
		$query = $queryBuilder->getQuery();
		$results = $query->getResult();
		return $results;
	}

	public function myFindAllDQL()
	{
		$query = $this->_em->createQuery('SELECT a FROM LamaDelRayPlatformBundle:Advert a');
		$results = $query->getResult();
		return $results;
	}

	public function myFindOne($id)
	{
		$qb = $this->createQueryBuilder('a');
		$qb->where('a.id = :id')->setParameter('id',$id);
		return $qb->getQuery()->getResult();
	}

	public function findByAuthorAndDate($author, $year)
	{
		$qb = $this->createQueryBuilder('a');
		$qb->where('a.author = :author')->setParameter('author', $author)
	    ->andWhere('a.date < :year')->setParameter('year', $year)->orderBy('a.date', 'DESC');
		return $qb->getQuery()->getResult();
	}

	public function whereCurrentYear(QueryBuilder $qb)
	{
		$qb->andWhere('a.date BETWEEN :start AND :end')
    	->setParameter('start', new \Datetime(date('Y').'-01-01'))
    	->setParameter('end', new \Datetime(date('Y').'-12-31'));
    }

    public function getAdvertWithApplications()
    {
    	$qb = $this->createQueryBuilder('a')->leftJoin('a.applications', 'app')->addSelect('app');

    	return $qb->getQuery()->getResult();
    }

    public function getAdvertWithCategories(array $categoryNames)
    {
    	$qb = $this->createQueryBuilder('a');
    	$qb->join('a.categories', 'c')-addSelect('c');
    	$qb->where($qb->expr()->in('c.name', $categoryNames));

    	return $qb->getQuery()->getResult();
    }

}