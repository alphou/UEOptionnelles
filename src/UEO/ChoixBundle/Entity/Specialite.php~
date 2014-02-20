<?php

namespace UEO\ChoixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 */
class Specialite
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;


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
     * Set intitule
     *
     * @param string $intitule
     * @return Specialite
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }
    public function __toString()
    {
        return(string) $this->intitule;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parcours;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parcours = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add parcours
     *
     * @param \UEO\ChoixBundle\Entity\Parcours $parcours
     * @return Specialite
     */
    public function addParcour(\UEO\ChoixBundle\Entity\Parcours $parcours)
    {
        $this->parcours[] = $parcours;

        return $this;
    }

    /**
     * Remove parcours
     *
     * @param \UEO\ChoixBundle\Entity\Parcours $parcours
     */
    public function removeParcour(\UEO\ChoixBundle\Entity\Parcours $parcours)
    {
        $this->parcours->removeElement($parcours);
    }

    /**
     * Get parcours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParcours()
    {
        return $this->parcours;
    }
    
}
