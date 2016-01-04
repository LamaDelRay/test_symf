<?php

namespace LamaDelRay\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
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
        ->add('image', new ImageType(), array('required' => false))
        ->add('categories', 'entity', array(
            'class'      => 'LamaDelRayPlatformBundle:Category',
            'property' =>  'name',
            'multiple' => true
        ))
        ->add('save',   'submit');

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event){
                $advert = $event->getData();
                if ($advert === null){
                    return;
                }

                if (!$advert->getPublished() || null === $advert->getId()){
                    $event->getForm()->add('published', 'checkbox', array('required' => false));
                }
                else {
                    $event->getForm()->remove('published');
                }
            }
        );
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
