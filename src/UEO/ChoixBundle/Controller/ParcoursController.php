<?php

namespace UEO\ChoixBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use UEO\ChoixBundle\Entity\Parcours;
use UEO\ChoixBundle\Form\ParcoursType;

/**
 * Parcours controller.
 *
 */
class ParcoursController extends Controller
{

    /**
     * Lists all Parcours entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UEOChoixBundle:Parcours')->findAll();

        return $this->render('UEOChoixBundle:Parcours:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Parcours entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Parcours();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parcours_show', array('id' => $entity->getId())));
        }

        return $this->render('UEOChoixBundle:Parcours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Parcours entity.
    *
    * @param Parcours $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Parcours $entity)
    {
        $form = $this->createForm(new ParcoursType(), $entity, array(
            'action' => $this->generateUrl('parcours_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Parcours entity.
     *
     */
    public function newAction()
    {
        $entity = new Parcours();
        $form   = $this->createCreateForm($entity);

        return $this->render('UEOChoixBundle:Parcours:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Parcours entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UEOChoixBundle:Parcours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parcours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UEOChoixBundle:Parcours:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Parcours entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UEOChoixBundle:Parcours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parcours entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UEOChoixBundle:Parcours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Parcours entity.
    *
    * @param Parcours $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Parcours $entity)
    {
        $form = $this->createForm(new ParcoursType(), $entity, array(
            'action' => $this->generateUrl('parcours_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Parcours entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UEOChoixBundle:Parcours')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Parcours entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('parcours_edit', array('id' => $id)));
        }

        return $this->render('UEOChoixBundle:Parcours:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Parcours entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UEOChoixBundle:Parcours')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Parcours entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('parcours'));
    }

    /**
     * Creates a form to delete a Parcours entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parcours_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
