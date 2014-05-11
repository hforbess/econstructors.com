<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('forbess_articles_homepage', new Route('/hello/{name}', array(
    '_controller' => 'ForbessArticlesBundle:Default:index',
)));

return $collection;
