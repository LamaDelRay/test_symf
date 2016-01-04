<?php

namespace LamaDelRay\PlatformBundle\Bigbrother;

use Symfony\Component\Security\Core\User\UserInterface;

class CensorshipProcessor
{
	protected $mailer;

	public function __construct(\Swift_Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function notifyEmail($message, UserInterface $user)
	{
		$message = \Swift_Message::newInstance()
		->setSubject("Nouveau Message d'un utilisateur surveillé")
		->setFrom("admin@votresite.com")->setTo("admin@votresite.com")
		->setBody("L'utilisateur surveillé '".$user->getUsername()."' a posté le message suivant :'".$message."'");
		$this->mailer->send($message);
	}

	public function censorMEssage($message)
	{
		$message =str_replace(array('top secret','mot interdit'), '', $message);
		return $message;
	}


}