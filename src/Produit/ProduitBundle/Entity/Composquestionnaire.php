<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composquestionnaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Produit\ProduitBundle\Entity\ComposquestionnaireRepository")
 */
class Composquestionnaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="fermer", type="boolean")
     */
    private $fermer;
	
	/**
     * @var bigint
     *
     * @ORM\Column(name="lastvalidation", type="bigint", nullable=true)
     */
    private $lastvalidation;
	
	/**
         * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Questionnaire")
         * @ORM\JoinColumn(nullable=false)
         */
    private $questionnaire;
	
	/**
         * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Produitpanier")
         * @ORM\JoinColumn(nullable=false)
         */
    private $produitpanier;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Proposition")
       * @ORM\JoinColumn(nullable=true)
        */
	private $proposition;
	
	public function __construct()
	{
		$this->date = new \Datetime();
		$this->fermer = false;
		$this->lastvalidation = 0;
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Composquestionnaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set questionnaire
     *
     * @param \Produit\ProduitBundle\Entity\Questionnaire $questionnaire
     * @return Composquestionnaire
     */
    public function setQuestionnaire(\Produit\ProduitBundle\Entity\Questionnaire $questionnaire)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \Produit\ProduitBundle\Entity\Questionnaire 
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Set produitpanier
     *
     * @param \Produit\ProduitBundle\Entity\Produitpanier $produitpanier
     * @return Composquestionnaire
     */
    public function setProduitpanier(\Produit\ProduitBundle\Entity\Produitpanier $produitpanier)
    {
        $this->produitpanier = $produitpanier;

        return $this;
    }

    /**
     * Get produitpanier
     *
     * @return \Produit\ProduitBundle\Entity\Produitpanier 
     */
    public function getProduitpanier()
    {
        return $this->produitpanier;
    }

    /**
     * Set lastvalidation
     *
     * @param integer $lastvalidation
     * @return Composquestionnaire
     */
    public function setLastvalidation($lastvalidation)
    {
        $this->lastvalidation = $lastvalidation;

        return $this;
    }

    /**
     * Get lastvalidation
     *
     * @return integer 
     */
    public function getLastvalidation()
    {
        return $this->lastvalidation;
    }

    /**
     * Set fermer
     *
     * @param boolean $fermer
     * @return Composquestionnaire
     */
    public function setFermer($fermer)
    {
        $this->fermer = $fermer;

        return $this;
    }

    /**
     * Get fermer
     *
     * @return boolean 
     */
    public function getFermer()
    {
        return $this->fermer;
    }

    /**
     * Set proposition
     *
     * @param \Produit\ProduitBundle\Entity\Proposition $proposition
     * @return Composquestionnaire
     */
    public function setProposition(\Produit\ProduitBundle\Entity\Proposition $proposition = null)
    {
        $this->proposition = $proposition;

        return $this;
    }

    /**
     * Get proposition
     *
     * @return \Produit\ProduitBundle\Entity\Proposition 
     */
    public function getProposition()
    {
        return $this->proposition;
    }
}
