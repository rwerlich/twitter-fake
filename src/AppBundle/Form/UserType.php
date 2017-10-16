<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('name', TextType::class, array(
				'label' => 'Nome',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-name form-control'
				)
			))
            ->add('surname', TextType::class, array(
				'label' => 'Sobrenome',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-surname form-control'
				)
			))
			->add('nick', TextType::class, array(
				'label' => 'Nick',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-nick form-control'
				)
			))
            ->add('email', EmailType::class, array(
				'label' => 'Email',
				'required' => 'required',
				'attr' => array(
					'class' => 'form-email form-control'
				)
			))
            ->add('bio', TextareaType::class, array(
				'label' => 'Biografia',
				'required' => false,
				'attr' => array(
					'class' => 'form-bio form-control'
				)
			))
			->add('image', FileType::class, array(
				'label' => 'Foto',
				'required' => false,
				'data_class' => null,
				'attr' => array(
					'class' => 'form-image form-control'
				)
			))
            ->add('Salvar', SubmitType::class, array(
				"attr" => array(
					"class" => "form-submit btn btn-success"
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
            'data_class' => 'BackendBundle\Entity\User'
        ));
    }
}
