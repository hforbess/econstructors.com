<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('acme_store_homepage', new Route('/hello/{name}', array(
    '_controller' => 'AcmeStoreBundle:Default:index',
)));

return $collection;
