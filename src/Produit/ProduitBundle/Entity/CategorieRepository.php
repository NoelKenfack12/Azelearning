<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{
public function myFindAll()
{
	$query = $this->createQueryBuilder('c')
	              ->leftJoin('c.souscategories','s')
				  ->addSelect('s')
				  ->where('c.principale = 0')
	              ->orderBy('c.rang','DESC')
                  ->getQuery();
	return $query->getResult();
}
public function myFindOne()
{
	$query = $this->createQueryBuilder('c')
	              ->leftJoin('c.souscategories','s')
				  ->addSelect('s')
	              ->orderBy('c.rang','DESC')
				  ->setMaxResults(1)
                  ->getQuery();
	return $query->getOneOrNullResult();
}
public function myFindAllVente()
{
	$query = $this->createQueryBuilder('c')
	              ->leftJoin('c.souscategories','s')
				  ->addSelect('s')
				  ->where('c.principale = 1')
	              ->orderBy('c.rang','DESC')
                  ->getQuery();
	return $query->getResult();
}
}
