<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use General\ValidatorBundle\Validatortext\Taillemin;
use General\ValidatorBundle\Validatortext\Taillemax;
use General\ServiceBundle\Servicetext\GeneralServicetext;
use Symfony\Component\Validator\Constraints as Assert;

use General\ValidatorBundle\Validatortext\Email;
use General\ValidatorBundle\Validatortext\Telephone;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Produit\ProduitBundle\Entity\ProduitRepository")
 ** @ORM\HasLifecycleCallbacks
 */
class Produit
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
     * @var integer
     *
     * @ORM\Column(name="nblike", type="integer")
     */
    private $nblike;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="nbcertificat", type="integer")
     */
    private $nbcertificat;
	
	/**
     * @var string
     *
     * @ORM\Column(name="titre", type="string")
      *@Taillemin(valeur=3, message="Au moins 3 caractères")
     *@Taillemax(valeur=70, message="Au plus 70 caractès")
     */
    private $titre;
	
	/**
     * @var text
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     *@Taillemax(valeur=10000, message="Au plus 10000 caractès")
     */
    private $description;
	
	/**
     * @var text
     *
     * @ORM\Column(name="objectif", type="text", nullable=true)
     *@Taillemax(valeur=10000, message="Au plus 10000 caractès")
     */
    private $objectif;
	
	/**
     * @var text
     *
     * @ORM\Column(name="prerequis", type="text", nullable=true)
      *@Taillemax(valeur=10000, message="Au plus 10000 caractès")
     */
    private $prerequis;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbvente", type="integer")
     */
    private $nbvente;

    /**
     * @var integer
     *
     * @ORM\Column(name="rang", type="integer")
     */
    private $rang;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="timestamp", type="integer")
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastprise", type="integer")
     */
    private $lastprise;
	
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="avant", type="boolean")
     */
    private $avant;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="valide", type="boolean")
     */
    private $valide;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="guide", type="boolean")
     */
    private $guide;

    /**
     * @var integer
     *
     * @ORM\Column(name="difference", type="integer")
     */
    private $difference;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="newprise", type="integer")
     */
    private $newprise;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="dureeacces", type="integer")
     */
    private $dureeacces;
	
	/**
       * @ORM\ManyToOne(targetEntity="Users\UserBundle\Entity\User")
       * @ORM\JoinColumn(nullable=true)
        */
	private $user;
	
	/**
          * @ORM\ManyToMany(targetEntity="Users\UserBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=true)
          */
    private $userlikes;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="prixlivraison", type="integer")
     */
    private $prixlivraison;
	
	/**
       * @ORM\OneToOne(targetEntity="Produit\ProduitBundle\Entity\Imgproduit", cascade={"persist", "remove"})
      * @Assert\Valid()
       */
   private $imgproduit;
   
   /**
       * @ORM\OneToOne(targetEntity="Produit\ProduitBundle\Entity\Videoproduit", cascade={"persist", "remove"})
      * @Assert\Valid()
       */
   private $videoproduit;
	
	/**
         * @ORM\OneToMany(targetEntity="Produit\ProduitBundle\Entity\Coutlivraison", mappedBy="produit")
         */
    private $coutlivraisons;
	
	 /**
       * @ORM\ManyToOne(targetEntity="Produit\ProduitBundle\Entity\Souscategorie", inversedBy="produits")
       * @ORM\JoinColumn(nullable=false)
        */
	private $souscategorie;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ServiceBundle\Entity\Service")
       * @ORM\JoinColumn(nullable=true)
        */
	private $equipedom;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ServiceBundle\Entity\Service")
       * @ORM\JoinColumn(nullable=true)
        */
	private $equipeext;
	
	/**
       * @ORM\ManyToOne(targetEntity="Produit\ServiceBundle\Entity\Service")
       * @ORM\JoinColumn(nullable=true)
        */
	private $competition;

	private $servicetext;
	
	private $em;
	
	public function __construct(GeneralServicetext $service)
	{
		$this->servicetext = $service;
		$this->timestamp = time();
		$this->avant = false;
		$this->valide = false;
		$this->guide = false;
		$this->nblike = 0;
		$this->nbvente = 0;
		$this->nbcertificat = 0;
		$this->newprise = 1000;
		$this->difference = 0;
		$this->prixlivraison = 0;
		$this->lastprise = 1000;
		$this->rang = 0; 
		$this->dureeacces = 360; 
		$this->date = new \Datetime();
		$this->coutlivraisons = new \Doctrine\Common\Collections\ArrayCollection();
		$this->userlikes = new \Doctrine\Common\Collections\ArrayCollection();
	}

	public function setEm($em)
	{
	$this->em = $em;
	}
	public function getEm()
	{
	return $this->em;
	}
	
	public function priseLivraison($ville)
	{
		$coutlivraison = $this->em->getRepository('ProduitProduitBundle:Coutlivraison')
	                     ->findOneBy(array('ville'=>$ville,'produit'=>$this));
		if($coutlivraison != null)
		{
			return $coutlivraison->getMontant();
		}else{
			return $this->prixlivraison;
		}
	}
	
	public function getServicetext()
	{
		return $this->servicetext;
	}
	
	public function setServicetext(GeneralServicetext $service)
	{
		$this->servicetext = $service;
		return $this;
	}
	
	public function ancienPrixProduit()
	{
	$aprix = $this->newprise + $this->difference;
	return $aprix;
	}
	
	/**
      * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preSave()
    {
	if($this->newprise != $this->lastprise)
	{
        $this->difference = ($this->lastprise - $this->newprise);
	}
	$this->lastprise = $this->newprise;
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
     * @return Produit
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
     * Set nblike
     *
     * @param integer $nblike
     * @return Produit
     */
    public function setNblike($nblike)
    {
        $this->nblike = $nblike;

        return $this;
    }

    /**
     * Get nblike
     *
     * @return integer 
     */
    public function getNblike()
    {
        return $this->nblike;
    }

    /**
     * Set nbvente
     *
     * @param integer $nbvente
     * @return Produit
     */
    public function setNbvente($nbvente)
    {
        $this->nbvente = $nbvente;

        return $this;
    }

    /**
     * Get nbvente
     *
     * @return integer 
     */
    public function getNbvente()
    {
        return $this->nbvente;
    }

    /**
     * Set newprise
     *
     * @param integer $newprise
     * @return Produit
     */
    public function setNewprise($newprise)
    {
        $this->newprise = $newprise;

        return $this;
    }

    /**
     * Get newprise
     *
     * @return integer 
     */
    public function getNewprise()
    {
        return $this->newprise;
    }

    /**
     * Set lastprise
     *
     * @param integer $lastprise
     * @return Produit
     */
    public function setLastprise($lastprise)
    {
        $this->lastprise = $lastprise;

        return $this;
    }

    /**
     * Get lastprise
     *
     * @return integer 
     */
    public function getLastprise()
    {
        return $this->lastprise;
    }

    /**
     * Set difference
     *
     * @param integer $difference
     * @return Produit
     */
    public function setDifference($difference)
    {
        $this->difference = $difference;

        return $this;
    }

    /**
     * Get difference
     *
     * @return integer 
     */
    public function getDifference()
    {
        return $this->difference;
    }

    /**
     * Set user
     *
     * @param \Users\UserBundle\Entity\User $user
     * @return Produit
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
     * Set souscategorie
     *
     * @param \Produit\ProduitBundle\Entity\Souscategorie $souscategorie
     * @return Produit
     */
    public function setSouscategorie(\Produit\ProduitBundle\Entity\Souscategorie $souscategorie)
    {
        $this->souscategorie = $souscategorie;
		$souscategorie->addProduit($this);
        return $this;
    }

    /**
     * Get souscategorie
     *
     * @return \Produit\ProduitBundle\Entity\Souscategorie 
     */
    public function getSouscategorie()
    {
        return $this->souscategorie;
    }

    /**
     * Set prixlivraison
     *
     * @param integer $prixlivraison
     * @return Produit
     */
    public function setPrixlivraison($prixlivraison)
    {
        $this->prixlivraison = $prixlivraison;

        return $this;
    }

    /**
     * Get prixlivraison
     *
     * @return integer 
     */
    public function getPrixlivraison()
    {
        return $this->prixlivraison;
    }

    /**
     * Add userlikes
     *
     * @param \Users\UserBundle\Entity\User $userlikes
     * @return Produit
     */
    public function addUserlike(\Users\UserBundle\Entity\User $userlikes)
    {
        $this->userlikes[] = $userlikes;
		$this->nblike = $this->nblike + 1;

        return $this;
    }

    /**
     * Remove userlikes
     *
     * @param \Users\UserBundle\Entity\User $userlikes
     */
    public function removeUserlike(\Users\UserBundle\Entity\User $userlikes)
    {
        $this->userlikes->removeElement($userlikes);
    }

    /**
     * Get userlikes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserlikes()
    {
        return $this->userlikes;
    }

    /**
     * Add coutlivraisons
     *
     * @param \Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons
     * @return Produit
     */
    public function addCoutlivraison(\Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons)
    {
        $this->coutlivraisons[] = $coutlivraisons;

        return $this;
    }

    /**
     * Remove coutlivraisons
     *
     * @param \Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons
     */
    public function removeCoutlivraison(\Produit\ProduitBundle\Entity\Coutlivraison $coutlivraisons)
    {
        $this->coutlivraisons->removeElement($coutlivraisons);
    }

    /**
     * Get coutlivraisons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoutlivraisons()
    {
        return $this->coutlivraisons;
    }


    /**
     * Set timestamp
     *
     * @param integer $timestamp
     * @return Produit
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
	
	public function getImagealeatoire()
	{
		$max = count($this->getImgproduits());
		if($max <= 1)
		{
			$tail1 = 1;
		}else{
			$tail1 = mt_rand(1,$max);
		}
		$compt = 1;
		$imgchoise = null;
		foreach($this->getImgproduits() as $image)
		{
			if($compt == $tail1)
			{
				$imgchoise = $image;
			}
			$compt++;
		}
		return $imgchoise;
	}
	
	public function name($tail)
	{
		if(strlen($this->titre) <= $tail)
		{
		return $this->titre;
		}else{
		$text = wordwrap($this->titre,$tail,'~',true);
		$tab = explode('~',$text);
		$text = $tab[0];
		return $text.'..';
		}
	}
	
	/**
      * @ORM\PrePersist()
     */
    public function prePersist()
    {
		$this->souscategorie->setNbproduit($this->souscategorie->getNbproduit() + 1);
		$this->souscategorie->setServicetext($this->getServicetext());
	}
	
	/**
     *@ORM\PreRemove()
     */
    public function preRemove()
    {
		$this->souscategorie->setNbproduit($this->souscategorie->getNbproduit() - 1);
		$this->souscategorie->setServicetext($this->getServicetext());
	}

    /**
     * Set avant
     *
     * @param boolean $avant
     * @return Produit
     */
    public function setAvant($avant)
    {
        $this->avant = $avant;

        return $this;
    }

    /**
     * Get avant
     *
     * @return boolean 
     */
    public function getAvant()
    {
        return $this->avant;
    }

    /**
     * Set rang
     *
     * @param integer $rang
     * @return Produit
     */
    public function setRang($rang)
    {
        $this->rang = $rang;

        return $this;
    }

    /**
     * Get rang
     *
     * @return integer 
     */
    public function getRang()
    {
        return $this->rang;
    }

    /**
     * Set equipedom
     *
     * @param \Produit\ServiceBundle\Entity\Service $equipedom
     * @return Produit
     */
    public function setEquipedom(\Produit\ServiceBundle\Entity\Service $equipedom)
    {
        $this->equipedom = $equipedom;

        return $this;
    }

    /**
     * Get equipedom
     *
     * @return \Produit\ServiceBundle\Entity\Service 
     */
    public function getEquipedom()
    {
        return $this->equipedom;
    }

    /**
     * Set equipeext
     *
     * @param \Produit\ServiceBundle\Entity\Service $equipeext
     * @return Produit
     */
    public function setEquipeext(\Produit\ServiceBundle\Entity\Service $equipeext)
    {
        $this->equipeext = $equipeext;

        return $this;
    }

    /**
     * Get equipeext
     *
     * @return \Produit\ServiceBundle\Entity\Service 
     */
    public function getEquipeext()
    {
        return $this->equipeext;
    }

    /**
     * Set competition
     *
     * @param \Produit\ServiceBundle\Entity\Service $competition
     * @return Produit
     */
    public function setCompetition(\Produit\ServiceBundle\Entity\Service $competition)
    {
        $this->competition = $competition;

        return $this;
    }

    /**
     * Get competition
     *
     * @return \Produit\ServiceBundle\Entity\Service 
     */
    public function getCompetition()
    {
        return $this->competition;
    }

    /**
     * Set imgproduit
     *
     * @param \Produit\ProduitBundle\Entity\Imgproduit $imgproduit
     * @return Produit
     */
    public function setImgproduit(\Produit\ProduitBundle\Entity\Imgproduit $imgproduit = null)
    {
        $this->imgproduit = $imgproduit;

        return $this;
    }

    /**
     * Get imgproduit
     *
     * @return \Produit\ProduitBundle\Entity\Imgproduit 
     */
    public function getImgproduit()
    {
        return $this->imgproduit;
    }

    /**
     * Set videoproduit
     *
     * @param \Produit\ProduitBundle\Entity\Videoproduit $videoproduit
     * @return Produit
     */
    public function setVideoproduit(\Produit\ProduitBundle\Entity\Videoproduit $videoproduit = null)
    {
        $this->videoproduit = $videoproduit;

        return $this;
    }

    /**
     * Get videoproduit
     *
     * @return \Produit\ProduitBundle\Entity\Videoproduit 
     */
    public function getVideoproduit()
    {
        return $this->videoproduit;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Produit
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     * @return Produit
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return string 
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set prerequis
     *
     * @param string $prerequis
     * @return Produit
     */
    public function setPrerequis($prerequis)
    {
        $this->prerequis = $prerequis;

        return $this;
    }

    /**
     * Get prerequis
     *
     * @return string 
     */
    public function getPrerequis()
    {
        return $this->prerequis;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     * @return Produit
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
     * Set dureeacces
     *
     * @param integer $dureeacces
     * @return Produit
     */
    public function setDureeacces($dureeacces)
    {
        $this->dureeacces = $dureeacces;

        return $this;
    }

    /**
     * Get dureeacces
     *
     * @return integer 
     */
    public function getDureeacces()
    {
        return $this->dureeacces;
    }

    /**
     * Set nbcertificat
     *
     * @param integer $nbcertificat
     * @return Produit
     */
    public function setNbcertificat($nbcertificat)
    {
        $this->nbcertificat = $nbcertificat;

        return $this;
    }

    /**
     * Get nbcertificat
     *
     * @return integer 
     */
    public function getNbcertificat()
    {
        return $this->nbcertificat;
    }
	
	public function getNoteGeneralQCM($prodpan)
	{
		$liste_chapitre = $this->em->getRepository('ProduitProduitBundle:Chapitrecours')
							       ->chapitreselectcours($this->getId());
		$total = 0;
		foreach($liste_chapitre as $chap)
		{
			$chap->setEm($this->em);
			$total = $total + $chap->getNoteQuestionnaire($prodpan);
		}
		
		if(count($liste_chapitre) > 0)
		{
			return ceil($total/count($liste_chapitre));
		}else{
			return 0;
		}
	}
	
	public function getChapitreCours()
	{
		$liste_chapitre = $this->em->getRepository('ProduitProduitBundle:Chapitrecours')
							       ->chapitreselectcours($this->getId());
		return $liste_chapitre;
	}

    /**
     * Set guide
     *
     * @param boolean $guide
     * @return Produit
     */
    public function setGuide($guide)
    {
        $this->guide = $guide;

        return $this;
    }

    /**
     * Get guide
     *
     * @return boolean 
     */
    public function getGuide()
    {
        return $this->guide;
    }
}
