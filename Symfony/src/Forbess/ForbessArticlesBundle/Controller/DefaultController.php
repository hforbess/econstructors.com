<?php

namespace Forbess\ForbessArticlesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ForbessArticlesBundle:Default:index.html.twig', array('name' => $name));
    }
}
