<?php

namespace Drupal\dino_roar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Drupal\dino_roar\Jurassic\RoarGenerator;

class RoarController
{
    public function roar($count)
    {
        $roarGenerator = new RoarGenerator;
        $roar = $roarGenerator->getRoar($count);

        return new Response($roar);
    }
}