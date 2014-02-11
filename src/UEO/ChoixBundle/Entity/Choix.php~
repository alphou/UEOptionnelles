<?php

namespace UEO\ChoixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choix
 */
class Choix
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $dateChoix;


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
     * Set dateChoix
     *
     * @param string $dateChoix
     * @return Choix
     */
    public function setDateChoix($dateChoix)
    {
        $this->dateChoix = $dateChoix;

        return $this;
    }

    /**
     * Get dateChoix
     *
     * @return string 
     */
    public function getDateChoix()
    {
        return $this->dateChoix;
    }
    /**
     * @var \UEO\ChoixBundle\Entity\Etudiant
     */
    private $etudiant;

    /**
     * @var \UEO\ChoixBundle\Entity\Module
     */
    private $module;


    /**
     * Set etudiant
     *
     * @param \UEO\ChoixBundle\Entity\Etudiant $etudiant
     * @return Choix
     */
    public function setEtudiant(\UEO\ChoixBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \UEO\ChoixBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set module
     *
     * @param \UEO\ChoixBundle\Entity\Module $module
     * @return Choix
     */
    public function setModule(\UEO\ChoixBundle\Entity\Module $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \UEO\ChoixBundle\Entity\Module 
     */
    public function getModule()
    {
        return $this->module;
    }
}
