<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


/**
 * @Route("/usuario")
 */
class UsuarioController extends Controller
{
    /**
     * @Route("/", name="lista_usuarios")
     */
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


}
