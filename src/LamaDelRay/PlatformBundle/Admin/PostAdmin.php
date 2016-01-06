<?php

// namespace LamaDelRay\Admin;

// use Sonata\AdminBundle\Admin\Admin;
// use Sonata\AdminBundle\Show\ShowMapper;
// use Sonata\AdminBundle\Form\FormMapper;
// use Sonata\AdminBundle\Datagrid\ListMapper;
// use Sonata\AdminBundle\Datagrid\DatagridMapper;

// class PostAdmin extends Admin
// {
// 	protected function configureFormFields(FormMapper $formMapper)
// 	{
// 		$formMapper->add('title', 'text', array(
// 			'label' => 'Post Title'
// 		))
// 		->add('author', 'entity', array(
// 			'class' => 'AppBundle\Entity\User'
// 		));

// 	}

// 	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
// 	{
// 		$datagridMapper->add('title')->add('author');
// 	}

// 	protected function configureListFields(ListMapper $listMapper)
// 	{
// 		$listMapper->addIdentifier('title')-<add('slug')->add('author');
// 	}

// 	protected function configureShowFields (ShowMapper $showMapper)
// 	{
// 		$showMapper->add('title')->add('slug')->add('author');
// 	}

// }