<?php

namespace UEO\ChoixBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 */
class Etudiant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $email;


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
     * Set nom
     *
     * @param string $nom
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @var \UEO\ChoixBundle\Entity\Parcours
     */
    private $parcours_etudiant;


    /**
     * Set parcours_etudiant
     *
     * @param \UEO\ChoixBundle\Entity\Parcours $parcoursEtudiant
     * @return Etudiant
     */
    public function setParcoursEtudiant(\UEO\ChoixBundle\Entity\Parcours $parcoursEtudiant = null)
    {
        $this->parcours_etudiant = $parcoursEtudiant;

        return $this;
    }

    /**
     * Get parcours_etudiant
     *
     * @return \UEO\ChoixBundle\Entity\Parcours 
     */
    public function getParcoursEtudiant()
    {
        return $this->parcours_etudiant;
    }
    /**
     * @var \UEO\ChoixBundle\Entity\Parcours
     */
    private $parcours;


    /**
     * Set parcours
     *
     * @param \UEO\ChoixBundle\Entity\Parcours $parcours
     * @return Etudiant
     */
    public function setParcours(\UEO\ChoixBundle\Entity\Parcours $parcours = null)
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
