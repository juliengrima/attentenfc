<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Complement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Complement controller.
 *
 */
class ComplementController extends Controller
{
    /**
     * Lists all complement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $complements = $em->getRepository('AppBundle:Complement')->findAll();

        return $this->render('complement/index.html.twig', array(
            'complements' => $complements,
        ));
    }

    /**
     * Creates a new complement entity.
     *
     */
    public function newAction(Request $request)
    {
        $complement = new Complement();
        $form = $this->createForm('AppBundle\Form\ComplementType', $complement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($complement);
            $em->flush();

            return $this->redirectToRoute('complement_show', array('id' => $complement->getId()));
        }

        return $this->render('complement/new.html.twig', array(
            'complement' => $complement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a complement entity.
     *
     */
    public function showAction(Complement $complement)
    {
        $deleteForm = $this->createDeleteForm($complement);

        return $this->render('complement/show.html.twig', array(
            'complement' => $complement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing complement entity.
     *
     */
    public function editAction(Request $request, Complement $complement)
    {
        $deleteForm = $this->createDeleteForm($complement);
        $editForm = $this->createForm('AppBundle\Form\ComplementType', $complement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('complement_edit', array('id' => $complement->getId()));
        }

        return $this->render('complement/edit.html.twig', array(
            'complement' => $complement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a complement entity.
     *
     */
    public function deleteAction(Request $request, Complement $complement)
    {
        $form = $this->createDeleteForm($complement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($complement);
            $em->flush();
        }

        return $this->redirectToRoute('complement_index');
    }

    /**
     * Creates a form to delete a complement entity.
     *
     * @param Complement $complement The complement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Complement $complement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('complement_delete', array('id' => $complement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
