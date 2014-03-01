<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UEO\ChoixBundle\Entity\ModuleParcours;


/**
 * Etudiant controller.
 *
 */
class ModuleParcoursController extends Controller
{

    /**
     * Lists all Maquette entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UEOChoixBundle:ModuleParcours')->findAll();

        return $this->render('UEOChoixBundle:ModuleParcours:index.html.twig', array(
            'entities' => $entities,
        ));
    }
}