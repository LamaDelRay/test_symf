<?php

namespace LamaDelRay\PlatformBundle\Antispam;

class LamaDelRayAntispam extends \Twig_Extension
{
	private $mailer;
	private $locale;
	private $nbForSpam;

	public function __construct(\Swift_Mailer $mailer, $nbForSpam)
	{
		$this->mailer = $mailer;
		$this->nbForSpam = (int) $nbForSpam;
	}

	public function setLocale($locale)
	{
		$this->locale = $locale;
	}

	public function isSpam($text)
	{
		return strlen($text) < $this->nbForSpam;
	}

	public function getFunctions()
	{
		return array(
			'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam')
		);
	}

	public function getName()
	{
		return 'LamaDelRayAntispam';
	}
}