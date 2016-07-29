<?php

namespace daniiltserin\AdwertismentBoardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use daniiltserin\AdwertismentBoardBundle\Entity\AdwertismentSingle;
use daniiltserin\AdwertismentBoardBundle\Form\AdwertismentSingleType;

/**
 * AdwertismentSingle controller.
 *
 */
class AdwertismentSingleController extends Controller
{
    /**
     * Lists all AdwertismentSingle entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adwertismentSingles = $em->getRepository('daniiltserinAdwertismentBoardBundle:AdwertismentSingle')->findAll();

        return $this->render('adwertismentsingle/index.html.twig', array(
            'adwertismentSingles' => $adwertismentSingles,
        ));
    }

    /**
     * Creates a new AdwertismentSingle entity.
     *
     */
    public function newAction(Request $request)
    {
        $adwertismentSingle = new AdwertismentSingle();
        $form = $this->createForm('daniiltserin\AdwertismentBoardBundle\Form\AdwertismentSingleType', $adwertismentSingle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adwertismentSingle);
            $em->flush();

            return $this->redirectToRoute('ad_show', array('id' => $adwertismentSingle->getId()));
        }

        return $this->render('adwertismentsingle/new.html.twig', array(
            'adwertismentSingle' => $adwertismentSingle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AdwertismentSingle entity.
     *
     */
    public function showAction(AdwertismentSingle $adwertismentSingle)
    {
        $deleteForm = $this->createDeleteForm($adwertismentSingle);

        return $this->render('adwertismentsingle/show.html.twig', array(
            'adwertismentSingle' => $adwertismentSingle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing AdwertismentSingle entity.
     *
     */
    public function editAction(Request $request, AdwertismentSingle $adwertismentSingle)
    {
        $deleteForm = $this->createDeleteForm($adwertismentSingle);
        $editForm = $this->createForm('daniiltserin\AdwertismentBoardBundle\Form\AdwertismentSingleType', $adwertismentSingle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adwertismentSingle);
            $em->flush();

            return $this->redirectToRoute('ad_edit', array('id' => $adwertismentSingle->getId()));
        }

        return $this->render('adwertismentsingle/edit.html.twig', array(
            'adwertismentSingle' => $adwertismentSingle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a AdwertismentSingle entity.
     *
     */
    public function deleteAction(Request $request, AdwertismentSingle $adwertismentSingle)
    {
        $form = $this->createDeleteForm($adwertismentSingle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adwertismentSingle);
            $em->flush();
        }

        return $this->redirectToRoute('ad_index');
    }

    /**
     * Creates a form to delete a AdwertismentSingle entity.
     *
     * @param AdwertismentSingle $adwertismentSingle The AdwertismentSingle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AdwertismentSingle $adwertismentSingle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ad_delete', array('id' => $adwertismentSingle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
