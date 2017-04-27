<?php

namespace QuizzBundle\Controller;

use QuizzBundle\Entity\QuestionEasy;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Questioneasy controller.
 *
 * @Route("questioneasy")
 */
class QuestionEasyController extends Controller
{
    /**
     * Lists all questionEasy entities.
     *
     * @Route("/", name="questioneasy_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questionEasies = $em->getRepository('QuizzBundle:QuestionEasy')->findAll();

        return $this->render('questioneasy/index.html.twig', array(
            'questionEasies' => $questionEasies,
        ));
    }

    /**
     * Creates a new questionEasy entity.
     *
     * @Route("/new", name="questioneasy_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $questionEasy = new Questioneasy();
        $form = $this->createForm('QuizzBundle\Form\QuestionEasyType', $questionEasy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionEasy);
            $em->flush();

            return $this->redirectToRoute('questioneasy_show', array('id' => $questionEasy->getId()));
        }

        return $this->render('questioneasy/new.html.twig', array(
            'questionEasy' => $questionEasy,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a questionEasy entity.
     *
     * @Route("/{id}", name="questioneasy_show")
     * @Method("GET")
     */
    public function showAction(QuestionEasy $questionEasy)
    {
        $deleteForm = $this->createDeleteForm($questionEasy);

        return $this->render('questioneasy/show.html.twig', array(
            'questionEasy' => $questionEasy,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing questionEasy entity.
     *
     * @Route("/{id}/edit", name="questioneasy_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, QuestionEasy $questionEasy)
    {
        $deleteForm = $this->createDeleteForm($questionEasy);
        $editForm = $this->createForm('QuizzBundle\Form\QuestionEasyType', $questionEasy);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questioneasy_edit', array('id' => $questionEasy->getId()));
        }

        return $this->render('questioneasy/edit.html.twig', array(
            'questionEasy' => $questionEasy,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a questionEasy entity.
     *
     * @Route("/{id}", name="questioneasy_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, QuestionEasy $questionEasy)
    {
        $form = $this->createDeleteForm($questionEasy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($questionEasy);
            $em->flush();
        }

        return $this->redirectToRoute('questioneasy_index');
    }

    /**
     * Creates a form to delete a questionEasy entity.
     *
     * @param QuestionEasy $questionEasy The questionEasy entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(QuestionEasy $questionEasy)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questioneasy_delete', array('id' => $questionEasy->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
