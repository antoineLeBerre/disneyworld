<?php
/**
 * Created by PhpStorm.
 * User: antoineleberre
 * Date: 02/11/2017
 * Time: 23:26
 */

namespace Disney\DisneylandBundle\Service;


use Doctrine\ORM\EntityManagerInterface;

class BddManager
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getAttractions()
    {
        $em = $this->em->getRepository('DisneyDisneylandBundle:Attractions');
        $result = $em->findAll();

        return $result;
    }
}