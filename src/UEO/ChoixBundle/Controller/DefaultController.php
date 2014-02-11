<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UEOChoixBundle:Default:index.html.twig');
    }
}