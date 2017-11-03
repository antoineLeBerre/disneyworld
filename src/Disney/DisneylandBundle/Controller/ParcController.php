<?php
/**
 * Created by PhpStorm.
 * User: antoineleberre
 * Date: 03/11/2017
 * Time: 01:22
 */

namespace Disney\DisneylandBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParcController extends Controller
{
    public function attractionsAction(Request $request){
        $manageAttraction = $this->get('disney_disneyland.bddmanager');
        $id = $request->get('id');
        $attractions = $manageAttraction->getAttractionsByParc($id);


        return $this->render('DisneyDisneylandBundle:Parc:index.html.twig', [
            'contents'=> $attractions
        ]);
    }

    public function attractionAction(Request $request)
    {
        $manageAttraction = $this->get('disney_disneyland.bddmanager');
        $id = $request->get('id');
        $attraction = $manageAttraction->getAttraction($id);
//        dump($attraction);
//        die();

        return $this->render('DisneyDisneylandBundle:Parc:attraction.html.twig', [
            'content'=> $attraction[0]
        ]);
    }

    public function restaurantsAction(Request $request) {
        $restaurantManger = $this->get('disney_disneyland.bddmanager');
        $id = $request->get('id');

        $restaurant = $restaurantManger->getRestaurantByParc($id);

        return $this->render('DisneyDisneylandBundle:Parc:index.html.twig', [
            'contents'=> $restaurant,
            'title' => 'Les restaurants du parc ',
        ]);
    }
}