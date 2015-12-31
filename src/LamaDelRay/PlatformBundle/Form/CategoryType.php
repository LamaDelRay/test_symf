<?php

namespace LamaDelRay\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use LamaDelRay\PlatformBundle\Repository\AdvertRepository;


class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
        ;

        $builder->add('advert', 'entity', array(
            'class'         => 'LamaDelRayPlatformBundle:Advert',
            'property'      =>  'title',
            'query_builder' => function(AdvertRepository $repo) {
            return $repo->getPublishedQueryBuilder();
            }
        ));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LamaDelRay\PlatformBundle\Entity\Category'
        ));
    }
}
