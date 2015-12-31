<?php

namespace LamaDelRay\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use LamaDelRay\PlatformBundle\Entity\Advert;
use LamaDelRay\PlatformBundle\Form\AdvertType;
use LamaDelRay\PlatformBundle\Entity\Application;
use LamaDelRay\PlatformBundle\Entity\AdvertSkill;

class AdvertController extends Controller
{
	public function indexAction($page)
	{
		if ($page < 1) {
			throw new NotFoundHttpException('Page "'.$page.'" inexistante');
		}

		$nbPerPage = 3;

		$listAdverts = $this->getDoctrine()->getManager()->getRepository('LamaDelRayPlatformBundle:Advert')->getAdverts($page, $nbPerPage);

		$nbPages = ceil(count($listAdverts)/$nbPerPage);
		if ($page > $nbPages) {
			throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}

		return $this->render('LamaDelRayPlatformBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts,
			'nbPages'	  => $nbPages,
			'page'		  => $page
		));
	}

	public function viewAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$advert = $em->getRepository('LamaDelRayPlatformBundle:Advert')->find($id);

		if ($advert === null){
			throw new NotFoundHttpException("L'annonce d'id".$id." n'existe pas.");
		}

		// $listApplications = $em->getRepository('LamaDelRayPlatformBundle:Application')->findBy(array('advert' => $advert));
		$listAdvertSkills = $em->getRepository('LamaDelRayPlatformBundle:AdvertSkill')->findBy(array('advert' => $advert));

		return $this->render('LamaDelRayPlatformBundle:Advert:view.html.twig', array(
			'advert' 			=> $advert,
			'listAdvertSkills'	=> $listAdvertSkills
		));
	}

	public function addAction(Request $request)
	{
		$advert = new Advert();
		$form = $this->createForm(new AdvertType(), $advert);

		if ($form->handleRequest($request)->isValid()){
			$em = $this->getDoctrine()->getManager();
			$em->persist($advert);
			$em->flush();
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
			return $this->redirect($this->generateUrl('platform_view', array('id' => $advert->getId())));
		}

		return $this->render('LamaDelRayPlatformBundle:Advert:add.html.twig', array(
			'form' => $form->createView(),
		));
	}

	public function editAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$advert = $em->getRepository('LamaDelRayPlatformBundle:Advert')->find($id);

		if ($advert === null){
			throw new NotFoundHttpException("l'annonce d'id ".$id." n'existe pas.");
		}
		$form = $this->createForm(new AdvertEditType(), $advert);

		if ($form->handleRequest($request)->isValid()){
			$em->flush();
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
			return $this->redirect($this->generateUrl('platform_view', array('id' => $advert->getId())));
		}

		return $this->render('LamaDelRayPlatformBundle:Advert:edit.html.twig', array(
			'form'	 => $form->createView(),
			'advert' => $advert
		));
	}

	public function deleteAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$advert = $em->getRepository('LamaDelRayPlatformBundle:Advert')->find($id);

		if ( $advert === null){
			throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
		}
		$form = $this->createFormBuilder()->getForm();

		if ($form->handleRequest($request)->isValid()){
			$em->remove($advert);
			$em->flush();
			$request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');
			return $this->redirect($this->generateUrl('platform_home'));
		}

		return $this->render('LamaDelRayPlatformBundle:Advert:delete.html.twig', array(
			'advert' => $advert,
			'form'	 => $form->createView()
		));
	}

	public function menuAction($limit = 3)
	{
		$listAdverts = $this->getDoctrine()->getManager()->getRepository('LamaDelRayPlatformBundle:Advert')
		->findBy(
			array(),
			array('date' => 'desc'),
			$limit,
			0
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
