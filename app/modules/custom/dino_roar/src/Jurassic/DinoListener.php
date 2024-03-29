<?php

namespace Drupal\dino_roar\Jurassic;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

class DinoListener implements EventSubscriberInterface
{

    private $loggerFactory;

    public function __construct(LoggerChannelFactoryInterface $loggerFactory)
    {
        $this->loggerFactory = $loggerFactory;    
    }

    public function onKernelRequest(GetResponseEvent $event){
        
        $request = $event->getRequest();
        $shouldRoar = $request->query->get('roar');

        if($shouldRoar){
            $this->loggerFactory->get('default')
                ->debug('Roar requested ROOOOOOAR');
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest'
        ];
    }
}