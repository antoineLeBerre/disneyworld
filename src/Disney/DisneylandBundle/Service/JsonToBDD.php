<?php
/**
 * Created by PhpStorm.
 * User: antoineleberre
 * Date: 02/11/2017
 * Time: 15:30
 */

namespace Disney\DisneylandBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

class JsonToBDD
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function isEmpty ($table) {
        $em = $this->em->getRepository('DisneyDisneylandBundle:'.$table);
        $result = $em->findAll();
        if ($result == false){
            return true;
        }
        return false;
    }
}