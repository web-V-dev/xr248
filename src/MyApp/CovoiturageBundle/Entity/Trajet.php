<?php

namespace MyApp\CovoiturageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use MyApp\CovoiturageBundle\Entity\Utilisateur ;

/**
 * Trajet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MyApp\CovoiturageBundle\Entity\TrajetRepository")
 */
class Trajet

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
     * @var integer
     *
     * @ORM\Column(name="villeDepart", type="integer")
     */
    private $villeDepart;

    /**
     * @var integer
     *
     * @ORM\Column(name="villeArrive", type="integer")
     */
    private $villeArrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="date")
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArrive", type="date")
     */
    private $dateArrive;

    /**
     * @var \Boolean
     *
     * @ORM\Column(name="autoroute", type="boolean")
     */
    
    private $autoroute;

    /**
     * @var string
     *
     * @ORM\Column(name="bagage", type="string", length=1)
     *
     */

    private $bagage;

    /**
     * @var integer
     *
     * @ORM\Column(name="participation", type="integer")
     */
    private $participation;

     
  /**
    * @ORM\ManyToMany(targetEntity="Utilisateur", cascade={"persist"})
    */
    
    private $utilisateurs;
      
    
    public function __construct() {
        $this->utilisateurs = new ArrayCollection();
             
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
     * Set villeDepart
     *
     * @param integer $villeDepart
     * @return Trajet
     */
    public function setVilleDepart($villeDepart)
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    /**
     * Get villeDepart
     *
     * @return integer 
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * Set villeArrive
     *
     * @param integer $villeArrive
     * @return Trajet
     */
    public function setVilleArrive($villeArrive)
    {
        $this->villeArrive = $villeArrive;

        return $this;
    }

    /**
     * Get villeArrive
     *
     * @return integer 
     */
    public function getVilleArrive()
    {
        return $this->villeArrive;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     * @return Trajet
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime 
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateArrive
     *
     * @param \DateTime $dateArrive
     * @return Trajet
     */
    public function setDateArrive($dateArrive)
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get dateArrive
     *
     * @return \DateTime 
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set autoroute
     *
     * @param boolean $autoroute
     * @return Trajet
     */
    public function setAutoroute($autoroute)
    {
        $this->autoroute = $autoroute;

        return $this;
    }

    /**
     * Get autoroute
     *
     * @return boolean 
     */
    public function getAutoroute()
    {
        return $this->autoroute;
    }

    /**
     * Set bagage
     *
     * @param string $bagage
     * @return Trajet
     */
    public function setBagage($bagage)
    {
        $this->bagage = $bagage;

        return $this;
    }

    /**
     * Get bagage
     *
     * @return string 
     */
    public function getBagage()
    {
        return $this->bagage;
    }

    /**
     * Set participation
     *
     * @param integer $participation
     * @return Trajet
     */
    public function setParticipation($participation)
    {
        $this->participation = $participation;

        return $this;
    }

    /**
     * Get participation
     *
     * @return integer 
     */
    public function getParticipation()
    {
        return $this->participation;
    }

    /**
     * Add utilisateur
     *
     * @param \MyApp\CovoiturageBundle\Entity\Utilisateur $utilisateur
     * @return Trajet
     */
    public function addUtilisateur(\MyApp\CovoiturageBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateurs[] = $utilisateur;

        return $this;
    }

    /**
     * Remove utilisateur
     *
     * @param \MyApp\CovoiturageBundle\Entity\Utilisateur $utilisateur
     */
    public function removeUtilisateur(\MyApp\CovoiturageBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateurs->removeElement($utilisateur);
    }

    /**
     * Get utilisateurs
     *
     * 
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}