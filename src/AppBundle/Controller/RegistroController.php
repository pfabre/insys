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
class RegistroController extends Controller
{
    /**
     * @Route("/registro", name="registro")
     */
    public function registroUsuario(Request $request)
    {
        $usuario= new Usuario();
        $form =$this->createForm(UsuarioType::class,$usuario);
         $form->handleRequest($request);

        return $this->render('@App/Usuario/registro.html.twig',
            array("form"=>$form->createView()));

    }


}
