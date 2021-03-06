<?php

namespace LamaDelRay\PlatformBundle\Entity;
use Doctrine\ORM\EntityRepository;

class ApplicationRepository extends EntityRepository
{
    public function getApplicationsWithAdvert($limit)
    {
    	$qb = $this->createQueryBuilder('a');
    	$qb->join('a.advert', 'adv')->addSelect('adv');
    	$qb->setMaxResults($limit);
    	return $qb->getQuery()->getResult();
    }
}