<?php

namespace Drupal\dino_roar\Jurassic;

use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;

class RoarGenerator 
{
    private $keyValueFactory;
    private $useCache;

    public function __construct(KeyValueFactoryInterface $keyValueFactory, $useCache)
    {
        $this->keyValueFactory = $keyValueFactory;
        $this->useCache = $useCache;
    }

    public function getRoar($length)
    {
        $key = 'roar_' . $length;

        $store = $this->keyValueFactory->get('dino');

        if($this->useCache && $store->has($key)){
            return $store->get($key);
        }

        //pretend to be a delay in a query or something like that
        sleep(2);

        $string = 'R' . str_repeat('O', $length) . 'AR!';

        if($this->useCache){
            $store->set($key, $string);
        }

        return $string;
    }
}