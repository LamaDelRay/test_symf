<?php

namespace LamaDelRay\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
	public function indexAction()
	{
		$url = $this->get('router')->generate(
			'platform_view',
			array('id' => 5),
			true
		);

		return new Response("L'URL de l'annonce d'id est :" .$url);
	}

	public function viewAction($id)
	{
		return new Response("Affichage de l'annonce d'id : ". $id);
	}

	public function addAction()
	{
		$templating = $this->get('templating');
		$content = $this->get('templating')->render('LamaDelRayPlatformBundle:Advert:index.html.twig', 
			array( 'nom' => 'winzou'));
		return new Response($content);
	}

	public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }

}
