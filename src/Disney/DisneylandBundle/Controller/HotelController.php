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

class HotelController extends Controller
{
    public function  hotelAction(Request $request) {
        $hotelManger = $this->get('disney_disneyland.bddmanager');
        $id = $request->get('id');

        $hotel = $hotelManger->getHotelById($id);

        dump($hotel);
        die();

        return $this->render('DisneyDisneylandBundle:Hotel:index.html.twig', [
            'contents'=> $hotel,
        ]);
    }
}