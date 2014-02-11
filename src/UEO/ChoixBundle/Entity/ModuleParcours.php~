<?php

namespace UEO\ChoixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleParcours
 */
class ModuleParcours
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $oligatoire;


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
     * Set oligatoire
     *
     * @param boolean $oligatoire
     * @return ModuleParcours
     */
    public function setOligatoire($oligatoire)
    {
        $this->oligatoire = $oligatoire;

        return $this;
    }

    /**
     * Get oligatoire
     *
     * @return boolean 
     */
    public function getOligatoire()
    {
        return $this->oligatoire;
    }
    /**
     * @var \UEO\ChoixBundle\Entity\Module
     */
    private $module;

    /**
     * @var \UEO\ChoixBundle\Entity\Parcours
     */
    private $parcours;


    /**
     * Set module
     *
     * @param \UEO\ChoixBundle\Entity\Module $module
     * @return ModuleParcours
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

    /**
     * Set parcours
     *
     * @param \UEO\ChoixBundle\Entity\Parcours $parcours
     * @return ModuleParcours
     */
    public function setParcours(\UEO\ChoixBundle\Entity\Parcours $parcours)
    {
        $this->parcours = $parcours;

        return $this;
    }

    /**
     * Get parcours
     *
     * @return \UEO\ChoixBundle\Entity\Parcours 
     */
    public function getParcours()
    {
        return $this->parcours;
    }
}
