<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction()
    {
        return $this->render('UEOChoixBundle::homepage.html.twig');
    }
}