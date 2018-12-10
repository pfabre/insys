<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Solicitud;
use AppBundle\Entity\Usuario;
use AppBundle\Form\SolicitudType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;




/**
 * @Route("/solicitud")
 */
class SolicitudController extends Controller
{
    /**
     * @Route("/nueva", name="nuevasolicitud")
     */
    public function newAction(Request $request)
    {
        $Solicitud = new Solicitud();


        $form = $this->createForm(SolicitudType::class, $Solicitud);

       // $Solicitud->set(true);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $manajadorDb = $this->getDoctrine()->getManager();
            $manajadorDb->persist($Solicitud);
            $manajadorDb->flush();

            return $this->redirectToRoute('nuevasolicitud');
        }
            return $this->render('@App/Solicitud/nuevasolicitud.html.twig',
                array("form" => $form->createView()));

        }
    /**
     * @Route("/rest/guardarusuario", name="guardar",methods={"POST"})
     */
    public function postshowAction(Request $request)
    {

        dump($request->getContet());
        die;

        $data =$request->getContent();
        $data =json_decode($data,true);

        $Usuarios = new Usuario();

        $form =$this->createForm(UsuarioType::class, $Usuarios);
        $form->submit($data);

        if($form->isValid()){
            $em =$this->getDoctrine()->getManager();
            $em->persist($Usuarios);
            $em->flush();

        }else{
            dump($this->getErrorMessages($form));
            die;
            return new JsonResponse(null,400);
        }

        $em= $this->getDoctrine()->getManager();
        $em ->persist($Usuario);
        $em ->flush();

        $Usuario =$this->get('serializer')->serialize($Usuario,'json');
        $dataJson=json_decode($Usuario,true);
        return new JsonResponse($dataJson);


    }
    /**
     * @Route("/mostrarcampo", name="mostrar_campo")
     */
    public function showAction()
    {
        $CampoAfines = $this->getDoctrine()->getRepository(CampoAfin::class)->findAll();
        return $this->render('@App/Solicitud/nuevasolicitud.html.twig', ["CampoAfines"=> $CampoAfines]);

    }
    /**
     * @Route("/rest/mostrarusuario", name="mostrar_usuario",methods={"GET"})
     */
    public function restshowAction()
    {
        $Usuario = $this->getDoctrine()
            ->getRepository(Usuario::class)
            ->findAll();
        $Usuario =$this->get('serializer')->serialize($Usuario, 'json');
        $dataJson =json_decode($Usuario,true);

        return new JsonResponse($dataJson);

    }

}
