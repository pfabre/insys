<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * @Route("/usuario")
 */
class UsuarioController extends Controller
{

    public function indexAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $usuario= new Usuario();
        $usuario->setNombre("Juan ");
        $usuario->setApellido("de los Palotes");
        $usuario->setEmail("juanp@gmail.com");
       // $usuario->setPassword("1234");
        $usuario->setHabilitado(true);

        $encoder =$encoder->encodePassword($$usuario, "123456");
        $usuario ->setPassword($encoder);

        $manajadorDb =$this->getDoctrine()->getManager();
        $manajadorDb->persist($usuario);
        $manajadorDb ->flush();

        $usuario =$this->getDoctrine()->getRepository(Usuario::class)->findAll();

        // replace this example code with whatever you need
        return $this->render('@App/Usuario/lista_usuario.html.twig',[
            "usuarios"=>$usuario]);
    }
    /**
     * @Route("/lista", name="lista")
     */
    public function showAction()
    {
        $Usuarios = $this->getDoctrine()->getRepository(Usuario::class)->findAll();
        return $this->render('@App/Usuario/lista_usuario.html.twig', ["Usuarios" => $Usuarios]);

    }
    /**
     * @Route("/buscarID", name="buscar_id_usuario")
     */
    public function showIDAction($id)
    {
        $Usuario = $this->getDoctrine()
            ->getRepository(Usuario::class)
            ->find($id);


        return $this->render('@App/Solicitud/nuevasolicitud.html.twig',["Usuario"=>$Usuario]);

    }
    /**
     * @Route("/update/{id}",name="update_usuario")
     */
    public function updateAction(Request $request,Usuario $usuario)
    {

        $form = $this->createForm(UsuarioType::class ,$usuario);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $manejadorDb = $this->getDoctrine()->getManager();

            $manejadorDb->flush();

            return $this->redirectToRoute('lista',['usuario'=> $usuario->getId()]);
        }
        return $this->render('@App/Usuario/editarusuario.html.twig',
            array("form" => $form->createView()));


    }
    /**
     * @Route("/delete/{id}",name="delete_usuario")
     */
    public function deleteAction(Request $request,Usuario $usuario)
    {

        if ($usuario=== null) {
            return $this->redirectToRoute('mostrar_campo');
        }

        $manejadorDb = $this->getDoctrine()->getManager();
        $manejadorDb->remove($usuario);
        $manejadorDb->flush();

        return $this->redirectToRoute('lista');

    }

}
