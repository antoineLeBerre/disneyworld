<?php

namespace Disneyland\disneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('DisneylanddisneyBundle:Home:index.html.twig');
    }
}
