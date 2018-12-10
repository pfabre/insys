<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SolicitudType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo',TextType::class,array("label"=>"Titulo:","required"=>"required","attr"=>array("class"=>"form-control")))
            ->add('descripcion',TextType::class,array("label"=>"Descripcion:","required"=>"required","attr"=>array("class"=>"form-control")))
            ->add('fecha',TextType::class,array("label"=>"Fecha:","required"=>"required","attr"=>array("class"=>"form-control")))
            ->add('misCamposAfines',TextType::class, array("label"=>"misCamposAfines:", "required" =>"required","attr"=>array("class"=>"form-control")))
            -> add('Agregar',SubmitType::class,array("attr"=>array("class"=>"btn btn-primary")));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Solicitud'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_solicitud';
    }


}
