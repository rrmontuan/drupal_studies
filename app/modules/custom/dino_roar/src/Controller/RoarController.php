<?php

namespace Drupal\dino_roar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\dino_roar\Jurassic\RoarGenerator;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Logger\LoggerChannelFactoryInterface;

class RoarController extends ControllerBase
{
    private $roarGenerator;

    public function __construct(RoarGenerator $roarGenerator, LoggerChannelFactoryInterface $loggerFactory)
    {
        $this->roarGenerator = $roarGenerator;
        $this->loggerFactory = $loggerFactory;
    }

    public function roar($count)
    {
        $roar = $this->roarGenerator->getRoar($count);
        $this->loggerFactory->get('default')
            ->debug($roar);

        return new Response($roar);
    }

    public static function create(ContainerInterface $container)
    {
        $roarGenerator = $container->get('dino_roar.roar_generator');
        $loggerFactory = $container->get('logger.factory');

        return new static($roarGenerator, $loggerFactory);
    }
}