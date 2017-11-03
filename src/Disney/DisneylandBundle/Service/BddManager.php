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
        $results = $em->findAll();

        foreach ($results as $key=>$result) {
            $results[$key]->setParc($result->getParcText());
            $results[$key]->setLand($result->getLandText());
            $results[$key]->setAge($result->getAgeText());
        }

        return $results;
    }

    public function getAttractionByParc($parc)
    {
        $em = $this->em->getRepository('DisneyDisneylandBundle:Attractions');
        $results = $em->findByParc($parc);

        foreach ($results as $key=>$result) {
            $results[$key]->setParc($result->getParcText());
            $results[$key]->setLand($result->getLandText());
            $results[$key]->setAge($result->getAgeText());
        }

        return $results;
    }
}