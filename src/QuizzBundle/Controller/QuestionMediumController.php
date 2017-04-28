<?php

namespace QuizzBundle\Controller;

use QuizzBundle\Entity\QuestionMedium;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Questionmedium controller.
 *
 * @Route("questionmedium")
 */
class QuestionMediumController extends Controller
{
    /**
     * Lists all questionMedium entities.
     *
     * @Route("/", name="questionmedium_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        $questionMedia = $em->getRepository('QuizzBundle:QuestionMedium')->findAll();

        return $this->render('questionmedium/index.html.twig', array(
            'questionMedia' => $questionMedia,
            'user'=>$user
        ));
    }

    /**
     * Creates a new questionMedium entity.
     *
     * @Route("/new", name="questionmedium_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();

        $questionMedium = new Questionmedium();
        $form = $this->createForm('QuizzBundle\Form\QuestionMediumType', $questionMedium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionMedium);
            $em->flush();

            return $this->redirectToRoute('questionmedium_show', array('id' => $questionMedium->getId(), 'user'=>$user));
        }

        return $this->render('questionmedium/new.html.twig', array(
            'questionMedium' => $questionMedium,
            'form' => $form->createView(),
            'user'=>$user
        ));
    }

    /**
     * Finds and displays a questionMedium entity.
     *
     * @Route("/{id}", name="questionmedium_show")
     * @Method("GET")
     */
    public function showAction(QuestionMedium $questionMedium)
    {
        $user = $this->getUser();

        $deleteForm = $this->createDeleteForm($questionMedium);

        return $this->render('questionmedium/show.html.twig', array(
            'questionMedium' => $questionMedium,
            'delete_form' => $deleteForm->createView(),
            'user'=>$user
        ));
    }

    /**
     * Displays a form to edit an existing questionMedium entity.
     *
     * @Route("/{id}/edit", name="questionmedium_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, QuestionMedium $questionMedium)
    {
        $user = $this->getUser();

        $deleteForm = $this->createDeleteForm($questionMedium);
        $editForm = $this->createForm('QuizzBundle\Form\QuestionMediumType', $questionMedium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questionmedium_edit', array('id' => $questionMedium->getId(), 'user'=>$user));
        }

        return $this->render('questionmedium/edit.html.twig', array(
            'questionMedium' => $questionMedium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user'=>$user
        ));
    }

    /**
     * Deletes a questionMedium entity.
     *
     * @Route("/{id}", name="questionmedium_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, QuestionMedium $questionMedium)
    {
        $form = $this->createDeleteForm($questionMedium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($questionMedium);
            $em->flush();
        }

        return $this->redirectToRoute('questionmedium_index');
    }

    /**
     * Creates a form to delete a questionMedium entity.
     *
     * @param QuestionMedium $questionMedium The questionMedium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(QuestionMedium $questionMedium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questionmedium_delete', array('id' => $questionMedium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
