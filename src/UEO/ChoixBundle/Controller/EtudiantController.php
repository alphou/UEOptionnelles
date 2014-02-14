<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EtudiantController extends Controller
{
    public function etudiantAction()
    {
        return $this->render('UEOChoixBundle:Etudiant:etudiant.html.twig');
    }
}