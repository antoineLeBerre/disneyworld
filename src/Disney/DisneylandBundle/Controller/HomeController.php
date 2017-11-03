<?php

namespace Disney\DisneylandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Simple\FilesystemCache;

class HomeController extends Controller
{
    public function indexAction()
    {
        $cache = $this->get('disney_disneyland.jsontobdd');

        if ($cache->isEmpty('attractions')) {
            $cache->setAttractions($cache->jsonDecode('https://trulydisney.com/api/attractions.php'));
        }
        if ($cache->isEmpty('hotels')) {
            $cache->setHotels($cache->jsonDecode('https://trulydisney.com/api/hotels.php'));
        }
        if ($cache->isEmpty('restaurants')) {
            $cache->setRestaurants($cache->jsonDecode('https://trulydisney.com/api/restaurants.php'));
        }
        if ($cache->isEmpty('shows')) {
            $cache->setShows($cache->jsonDecode('https://trulydisney.com/api/shows.php'));
        }
        if ($cache->isEmpty('waiting')) {
            $cache->setWaiting($cache->jsonDecode('https://trulydisney.com/api/waiting.php'));
        }

        return $this->render('DisneyDisneylandBundle:Home:index.html.twig');
    }

    public function attractionAction(){
        return $this->render('DisneyDisneylandBundle:Home:index.html.twig');
    }
}
