<?php

namespace Disneyland\disneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DisneylanddisneyBundle:Default:index.html.twig');
    }
}
