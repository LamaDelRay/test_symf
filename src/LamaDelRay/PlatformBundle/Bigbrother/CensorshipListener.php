<?php

namespace LamaDelRay\PlatformBundle\Bigbrother;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CensorshipListener implements EventSubscriberInterface
{
	protected $processor;
	protected $listUsers = array();


	public function __construct(CensorshipProcessor $processor, $listUsers)
	{
		$this->processor = $processor;
		$this->listUsers = $listUsers;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'platform.bigbrother.post_message'	=> 'processMessage',
			'autre.evenement'					=> 'autreMethode',
		);
	}

	public function processMessage(MessagePostEvent $event)
	{
		if (in_array($event->getUser()->getId(), $this->listUsers))
		{
			$this->processor->notifyEmail($event->getMessage(), $event->getUser());
			$message = $this->processor->censorMessage($event->getMessage());
			$event->setMessage($message);
		}
	}

}