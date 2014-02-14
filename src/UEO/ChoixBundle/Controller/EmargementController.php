<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmargementController extends Controller
{
    public function emargementAction()
    {
        return $this->render('UEOChoixBundle:Prof:emargement.html.twig');
    }
}