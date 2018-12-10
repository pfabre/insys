<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CampoAfin;
use AppBundle\Form\CampoAfinType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



/**
 * @Route("/campo")
 */
class CampoAFinController extends Controller
{
    /**
     * @Route("/agregar", name="agregar")
     */
    public function registroCampo(Request $request)
    {
        $CampoAfin = new CampoAfin();


        $form = $this->createForm(CampoAfinType::class, $CampoAfin);

        //  $CampoAfin->setHabilitado(true);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            /**
             * @var $CampoAfin CampoAfin
             */
            $manajadorDb = $this->getDoctrine()->getManager();
            $manajadorDb->persist($CampoAfin);
            $manajadorDb->flush();

            return $this->redirectToRoute('update',['campoAfin'=> $CampoAfin->getId()]);
        }
        return $this->render('@App/Campo/campoafin.html.twig',
            array("form" => $form->createView()));

    }

    /**
     * @Route("/mostrar", name="mostrar_campo")
     */
    public function showAction()
    {
        $CampoAfines = $this->getDoctrine()->getRepository(CampoAfin::class)->findAll();
        return $this->render('@App/Campo/listarCampo.html.twig', ["CampoAfines" => $CampoAfines]);

    }


    /**
     * @Route("/update/{id}",name="update")
     */
    public function updateAction(Request $request,CampoAfin $CampoAfin)
    {

              $form = $this->createForm(CampoAfinType::class, $CampoAfin);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $manejadorDb = $this->getDoctrine()->getManager();

                $manejadorDb->flush();

                return $this->redirectToRoute('mostrar_campo',['campoAfin'=> $CampoAfin->getId()]);
            }
            return $this->render('@App/Campo/editarcampo.html.twig',
                array("form" => $form->createView()));


    }
    /**
     * @Route("/delete/{id}",name="delete")
     */
    public function deleteAction(Request $request,CampoAfin $CampoAfin)
    {

         if ($CampoAfin=== null) {
             return $this->redirectToRoute('mostrar_campo');
         }

            $manejadorDb = $this->getDoctrine()->getManager();
         $manejadorDb->remove($CampoAfin);
            $manejadorDb->flush();

            return $this->redirectToRoute('mostrar_campo');

    }

    private function getErrorMessages(\Symfony\Component\Form\Form $form) {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            if ($form->isRoot()) {
                $errors['#'][] = $error->getMessage();
            } else {
                $errors[] = $error->getMessage();
            }
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }




    }