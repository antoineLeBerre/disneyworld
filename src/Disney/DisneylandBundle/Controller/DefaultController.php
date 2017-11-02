<?php

namespace Disney\DisneylandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DisneyDisneylandBundle:Default:index.html.twig');
    }
}
