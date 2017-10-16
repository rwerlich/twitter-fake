<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PublicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('text', TextareaType::class, array(
				'label' => 'Mensagem',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-control'
				)
			))
			->add('image', FileType::class, array(
				'label' => 'Foto',
				'required' => false,
				'data_class' => null,
				'attr' => array(
					'class' => 'form-control'
				)
			))
			->add('document', FileType::class, array(
				'label' => 'Documento',
				'required' => false,
				'data_class' => null,
				'attr' => array(
					'class' => 'form-control'
				)
			))
            ->add('Enviar', SubmitType::class, array(
				"attr" => array(
					"class" => "btn btn-success"
				)
			))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Publication'
        ));
    }
}
