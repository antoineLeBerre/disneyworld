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
        $attraction = $manageAttraction->getAttractionByParc($id);

        return $this->render('DisneyDisneylandBundle:Parc:index.html.twig', [
            'contents'=> $attraction
        ]);
    }
}