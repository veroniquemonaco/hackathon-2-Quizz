<?php

namespace QuizzBundle\Controller;

use QuizzBundle\Entity\QuestionHard;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Questionhard controller.
 *
 * @Route("questionhard")
 */
class QuestionHardController extends Controller
{
    /**
     * Lists all questionHard entities.
     *
     * @Route("/", name="questionhard_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $questionHards = $em->getRepository('QuizzBundle:QuestionHard')->findAll();

        return $this->render('questionhard/index.html.twig', array(
            'questionHards' => $questionHards,
        ));
    }

    /**
     * Creates a new questionHard entity.
     *
     * @Route("/new", name="questionhard_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $questionHard = new Questionhard();
        $form = $this->createForm('QuizzBundle\Form\QuestionHardType', $questionHard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($questionHard);
            $em->flush();

            return $this->redirectToRoute('questionhard_show', array('id' => $questionHard->getId()));
        }

        return $this->render('questionhard/new.html.twig', array(
            'questionHard' => $questionHard,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a questionHard entity.
     *
     * @Route("/{id}", name="questionhard_show")
     * @Method("GET")
     */
    public function showAction(QuestionHard $questionHard)
    {
        $deleteForm = $this->createDeleteForm($questionHard);

        return $this->render('questionhard/show.html.twig', array(
            'questionHard' => $questionHard,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing questionHard entity.
     *
     * @Route("/{id}/edit", name="questionhard_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, QuestionHard $questionHard)
    {
        $deleteForm = $this->createDeleteForm($questionHard);
        $editForm = $this->createForm('QuizzBundle\Form\QuestionHardType', $questionHard);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('questionhard_edit', array('id' => $questionHard->getId()));
        }

        return $this->render('questionhard/edit.html.twig', array(
            'questionHard' => $questionHard,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a questionHard entity.
     *
     * @Route("/{id}", name="questionhard_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, QuestionHard $questionHard)
    {
        $form = $this->createDeleteForm($questionHard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($questionHard);
            $em->flush();
        }

        return $this->redirectToRoute('questionhard_index');
    }

    /**
     * Creates a form to delete a questionHard entity.
     *
     * @param QuestionHard $questionHard The questionHard entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(QuestionHard $questionHard)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('questionhard_delete', array('id' => $questionHard->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
