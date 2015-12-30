<?php

namespace LamaDelRay\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdvertType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('date', 'date')->add('title', 'text')
        ->add('content', 'textarea')->add('author','text')
        ->add('published', 'checkbox', array('required' => false))->add('image', new ImageType())
        ->add('categories', 'collection', array(
            'type'      => new CategoryType(),
            'allow_add' =>  true,
            'allow_delete' => true
        ))
        ->add('save',   'submit');
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LamaDelRay\PlatformBundle\Entity\Advert'
        ));
    }




    public function getName()
    {
        return 'platformbundle_advert';
    }
}
