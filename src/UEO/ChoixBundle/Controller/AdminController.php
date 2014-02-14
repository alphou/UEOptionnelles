<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function adminAction()
    {
        return $this->render('UEOChoixBundle:Admin:admin.html.twig');
    }
    public function choixAction()
    {
        return $this->render('UEOChoixBundle:Admin:choix.html.twig');
    }
    public function etudiantsAction()
    {
        return $this->render('UEOChoixBundle:Admin:etudiants.html.twig');
    }
    public function maquetteAction()
    {
        return $this->render('UEOChoixBundle:Admin:maquette.html.twig');
    }
    public function parcoursAction()
    {
        return $this->render('UEOChoixBundle:Admin:parcours.html.twig');
    }
    public function specialiteAction()
    {
        return $this->render('UEOChoixBundle:Admin:specialite.html.twig');
    }
    public function ueAction()
    {
        return $this->render('UEOChoixBundle:Admin:ue.html.twig');
    }
}