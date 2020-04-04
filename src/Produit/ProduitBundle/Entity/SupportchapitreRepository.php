<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SupportchapitreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SupportchapitreRepository extends EntityRepository
{
public function myFindByCours($id)
{
	$query = $this->createQueryBuilder('s')
	              ->leftJoin('s.chapitrecours','c')
	              ->leftJoin('c.partiecours','p')
	              ->leftJoin('p.produit','d')
				  ->addSelect('c')
				  ->addSelect('p')
				  ->addSelect('d')
				  ->where('d.id = :id')
				  ->setParameter('id',$id)
	              ->orderBy('d.rang','ASC')
                  ->getQuery();
	return $query->getResult();
}
}
