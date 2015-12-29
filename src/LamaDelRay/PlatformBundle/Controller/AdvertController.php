<?php

namespace LamaDelRay\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use LamaDelRay\PlatformBundle\Entity\Advert;
use LamaDelRay\PlatformBundle\Entity\Application;
use LamaDelRay\PlatformBundle\Entity\AdvertSkill;

class AdvertController extends Controller
{
	public function indexAction($page)
	{
		if ($page < 1) {
			throw new NotFoundHttpException('Page "'.$page.'" inexistante');
		}

		$listAdverts = array(
			array(
				'title'   => 'Recherche développpeur Symfony2',
		        'id'      => 1,
		        'author'  => 'Alexandre',
		        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
		        'date'    => new \Datetime()),
			array(
					'title'   => 'Mission de webmaster',
					'id'      => 2,
			        'author'  => 'Hugo',
			        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
			        'date'    => new \Datetime()),
			array(
				'title'   => 'Offre de stage webdesigner',
		        'id'      => 3,
		        'author'  => 'Mathieu',
		        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
		        'date'    => new \Datetime())
		);

		return $this->render('LamaDelRayPlatformBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts
		));
	}

	public function viewAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$advert = $em->getRepository('LamaDelRayPlatformBundle:Advert')->find($id);

		if (null === $advert){
			throw new NotFoundHttpException("L'annonce d'id".$id." n'existe pas.");
		}

		$listApplications = $em->getRepository('LamaDelRayPlatformBundle:Application')->findBy(array('advert' => $advert));
		$listAdvertSkills = $em->getRepository('LamaDelRayPlatformBundle:AdvertSkill')->findBy(array('advert' => $advert));

		return $this->render('LamaDelRayPlatformBundle:Advert:view.html.twig', array(
			'advert' 			=> $advert,
			'listApplications'	=> $listApplications,
			'listAdvertSkills'	=> $listAdvertSkills
		));
	}

	public function addAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$advert = new Advert();
		$advert->setTitle('Recherche développeur Symfony2.');
		$advert->setAuthor('Alexandre');
		$advert->setContent("Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla...");

		$listSkills = $em->getRepository('LamaDelRayPlatformBundle:Skill')->findAll();

		foreach ($listSkills as $skill) {
			$advertSkill = new AdvertSkill();
			$advertSkill->setAdvert($advert);
			$advertSkill->setSkill($skill);
			$advertSkill->setLevel('Expert');
			$em->persist($advertSkill);
		}

		$em = $this->getDoctrine()->getManager();
		$em->persist($advert);
		$em->flush();

		if ($request->isMethod('POST')){
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			return $this->redirect($this->generateUrl('platform_view', array('id' => $advert->getId())));
		}

		return $this->render('LamaDelRayPlatformBundle:Advert:add.html.twig');
	}

	public function editAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$advert = $em->getRepository('LamaDelRayPlatformBundle:Advert')->find($id);

		if (null === $advert){
			throw new NotFoundHttpException("l'annonce d'id ".$id." n'existe pas.");
		}

		$listCategories = $em->getRepository('LamaDelRayPlatformBundle:Category')->findAll();

		foreach ($list as $category) {
			$advert->addCategory($category);
		}

		$em->flush();

		return $this->render('LamaDelRayPlatformBundle:Advert:edit.html.twig', array(
			'advert' => $advert
		));
	}

	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$advert = $em->getRepository('LamaDelRayPlatformBundle:Advert')->find($id);

		if (null === $advert){
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}

		foreach ($advert->getCategories() as $category){
			$advert->removeCategory($category);
		}

		$em->flush();

		return $this->render('LamaDelRayPlatformBundle:Advert:delete.html.twig');
	}

	public function menuAction()
	{
		$listAdverts = array(
			array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
			array('id' => 5, 'title' => 'Mission de webmaster'),
			array('id' => 9, 'title' => 'Offre de stage webdesigner')
		);

		return $this->render('LamaDelRayPlatformBundle:Advert:menu.html.twig', array(
			'listAdverts' => $listAdverts
		));
	}

	public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }

}
