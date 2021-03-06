<?php

namespace Produit\ProduitBundle\Entity;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Produit\ProduitBundle\Entity\PanierRepository")
 */
 
class Panier
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
     * @ORM\Column(name="payer", type="boolean")
     */
    private $payer;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="livrer", type="boolean")
     */
    private $livrer;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="coastlivraison", type="integer")
     */
	private $coastlivraison;
	
	
	/**
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=true)
        */
	private $user;
	
	/**
       * @ORM\OneToOne(targetEntity="Produit\ServiceBundle\Entity\Ville")
       * @ORM\JoinColumn(nullable=true)
        */
	private $ville;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="livraisonpayer", type="boolean")
     */
    private $livraisonpayer;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="messadmin", type="boolean")
     */
    private $messadmin;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=true)
     */
    private $destination;
	
	/**
         * @ORM\OneToMany(targetEntity="Produit\ProduitBundle\Entity\Produitpanier", mappedBy="panier")
         */
    private $produitpaniers;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ServiceBundle\Entity\Service")
       * @ORM\JoinColumn(nullable=true)
        */
	private $service;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Chapitrecours")
       * @ORM\JoinColumn(nullable=true)
        */
	private $chapitrecours;
	
	public function __construct()
	{
		$this->produitpaniers = new \Doctrine\Common\Collections\ArrayCollection();
		$this->date = new \Datetime();
		$this->payer = true;
		$this->livrer = false;
		$this->valide = true;
		$this->livraisonpayer = false;
		$this->coastlivraison = 0;
		$this->messadmin = false;
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
     * @return Panier
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
     * Set payer
     *
     * @param boolean $payer
     * @return Panier
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * Get payer
     *
     * @return boolean 
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Set livrer
     *
     * @param boolean $livrer
     * @return Panier
     */
    public function setLivrer($livrer)
    {
        $this->livrer = $livrer;

        return $this;
    }

    /**
     * Get livrer
     *
     * @return boolean 
     */
    public function getLivrer()
    {
        return $this->livrer;
    }

    /**
     * Set user
     *
     * @param \Users\UserBundle\Entity\User $user
     * @return Panier
     */
    public function setUser(\Users\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Users\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add produitpaniers
     *
     * @param \Produit\ProduitBundle\Entity\Produitpanier $produitpaniers
     * @return Panier
     */
    public function addProduitpanier(\Produit\ProduitBundle\Entity\Produitpanier $produitpaniers)
    {
        $this->produitpaniers[] = $produitpaniers;

        return $this;
    }

    /**
     * Remove produitpaniers
     *
     * @param \Produit\ProduitBundle\Entity\Produitpanier $produitpaniers
     */
    public function removeProduitpanier(\Produit\ProduitBundle\Entity\Produitpanier $produitpaniers)
    {
        $this->produitpaniers->removeElement($produitpaniers);
    }

    /**
     * Get produitpaniers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduitpaniers()
    {
        return $this->produitpaniers;
    }

    /**
     * Set livraisonpayer
     *
     * @param boolean $livraisonpayer
     * @return Panier
     */
    public function setLivraisonpayer($livraisonpayer)
    {
        $this->livraisonpayer = $livraisonpayer;

        return $this;
    }

    /**
     * Get livraisonpayer
     *
     * @return boolean 
     */
    public function getLivraisonpayer()
    {
        return $this->livraisonpayer;
    }


    /**
     * Set destination
     *
     * @param string $destination
     * @return Panier
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set coastlivraison
     *
     * @param integer $coastlivraison
     * @return Panier
     */
    public function setCoastlivraison($coastlivraison)
    {
        $this->coastlivraison = $coastlivraison;

        return $this;
    }

    /**
     * Get coastlivraison
     *
     * @return integer 
     */
    public function getCoastlivraison()
    {
        return $this->coastlivraison;
    }

    /**
     * Set ville
     *
     * @param \Produit\ServiceBundle\Entity\Ville $ville
     * @return Panier
     */
    public function setVille(\Produit\ServiceBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Produit\ServiceBundle\Entity\Ville 
     */
    public function getVille()
    {
        return $this->ville;
    }
	
	public function numFacture()
	{
		$datetransform = new DateTimeToArrayTransformer();
		$dt = $datetransform->transform($this->getDate());
		return ''.$dt['day'].''.$this->getId().''.$dt['month'].''.$dt['year'];
	}
	
	public function dateFacture()
	{
		$datetransform = new DateTimeToArrayTransformer();
		$dt = $datetransform->transform($this->getDate());
		return $dt['day'].'-'.$dt['month'].'-'.$dt['year'];
	}
	
	public function getUploadDir()
	{
	// On retourne le chemin relatif vers l'image pour un navigateur
	return 'bundles/produit/produit/facture/panier';
	}
	
	public function getUploadRootDir()
	{
	// On retourne le chemin relatif vers l'image pour notre codePHP
	return  __DIR__.'/../../../../web/'.$this->getUploadDir();
	}
	
	public function getWebPath()
	{
	return $this->getUploadDir().'/'.$this->numFacture().'.pdf';
	}

    /**
     * Set messadmin
     *
     * @param boolean $messadmin
     * @return Panier
     */
    public function setMessadmin($messadmin)
    {
        $this->messadmin = $messadmin;

        return $this;
    }

    /**
     * Get messadmin
     *
     * @return boolean 
     */
    public function getMessadmin()
    {
        return $this->messadmin;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     * @return Panier
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean 
     */
    public function getValide()
    {
        return $this->valide;
    }

    /**
     * Set service
     *
     * @param \Produit\ServiceBundle\Entity\Service $service
     * @return Panier
     */
    public function setService(\Produit\ServiceBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Produit\ServiceBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set chapitrecours
     *
     * @param \Produit\ProduitBundle\Entity\Chapitrecours $chapitrecours
     * @return Panier
     */
    public function setChapitrecours(\Produit\ProduitBundle\Entity\Chapitrecours $chapitrecours = null)
    {
        $this->chapitrecours = $chapitrecours;

        return $this;
    }

    /**
     * Get chapitrecours
     *
     * @return \Produit\ProduitBundle\Entity\Chapitrecours 
     */
    public function getChapitrecours()
    {
        return $this->chapitrecours;
    }
}
