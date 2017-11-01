<?php

namespace Disneyland\disneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        function jsonDecode($url) {
            $contentJSON = file_get_contents($url);

            $contentArray = json_decode($url);

            return $contentArray;
        }

        $attractions = jsonDecode('https://trulydisney.com/api/attractions.php');
        $waiting =  jsonDecode('https://trulydisney.com/api/waiting.php');
        $hotels = jsonDecode('https://trulydisney.com/api/hotels.php');
        $restaurants = jsonDecode('https://trulydisney.com/api/restaurants.php');
        $shows = jsonDecode('https://trulydisney.com/api/shows.php');
        $calendar = jsonDecode('https://trulydisney.com/api/calendar.php');

        //urlParc2 = http://cdn1.dlp-media.com/resize/mwImage/1/630/354/75/wdpromedia.disney.go.com/media/wdpro-dlp-assets/prod/fr-fr/system/images/n009365_2017jun01_disney-studio1_16-9.jpg
        //urlParc1 = http://cdn1.dlp-media.com/resize/mwImage/1/630/354/75/wdpromedia.disney.go.com/media/wdpro-dlp-assets/prod/fr-fr/system/images/n013047_2019mai13_sleeping-beauty-castle_16-9.jpg

        return $this->render('DisneylanddisneyBundle:Home:index.html.twig', [
            'attractions'   => $attractions,
            'waiting'       => $waiting,
            'hotels'        => $hotels,
            'restaurants'   => $restaurants,
            'shows'         => $shows,
            'calendar'      => $calendar
        ]);
    }
}
