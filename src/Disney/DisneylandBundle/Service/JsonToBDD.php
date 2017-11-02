<?php
/**
 * Created by PhpStorm.
 * User: antoineleberre
 * Date: 02/11/2017
 * Time: 15:30
 */

namespace Disney\DisneylandBundle\Service;

use Disney\DisneylandBundle\Entity\Attractions;
use Disney\DisneylandBundle\Entity\Hotels;
use Disney\DisneylandBundle\Entity\Restaurants;
use Disney\DisneylandBundle\Entity\Shows;
use Disney\DisneylandBundle\Entity\Waiting;
use Doctrine\ORM\EntityManagerInterface;

class JsonToBDD
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function isEmpty ($table) {
        $em = $this->em->getRepository('DisneyDisneylandBundle:'.ucfirst($table));
        $result = $em->findAll();
        if ($result == false){
            return true;
        }
        return false;
    }

    function jsonDecode($url) {
        $contentJSON = file_get_contents($url);

        $contentArray = json_decode($contentJSON);

        return $contentArray;
    }

    public function setAttractions($attractions)
    {
        foreach ($attractions->attractions as $key=>$tabAttraction) {
            dump($tabAttraction);
            $attraction = new Attractions();
            $repo = $this->em->getRepository('DisneyDisneylandBundle:Attractions');
            $attraction->setId($tabAttraction->id);
            $attraction->setName($tabAttraction->name);
            $attraction->setAge($tabAttraction->age[sizeof($tabAttraction->age) - 1]);
            if ($tabAttraction->image == null) {
                $tabAttraction->image = '28614595d88fc5d4f47886cfbe106885-disneyland-paris-logo.png';
            }
            $attraction->setImage($tabAttraction->image);
            $attraction->setPark($tabAttraction->parc);
            $attraction->setLand($tabAttraction->land);
            $attraction->setMinSize($tabAttraction->min_size);

            $this->em->persist($attraction);
            $this->em->flush();
        }
    }

    public function setHotels($hotels)
    {
        foreach ($hotels->hotels as $key=>$tabHotels) {
            dump($tabHotels);
            $hotel = new Hotels();
            $repo = $this->em->getRepository('DisneyDisneylandBundle:Hotels');
            $hotel->setId($tabHotels->id);
            $hotel->setName($tabHotels->name);
            if ($tabHotels->image == null) {
                $tabHotels->image = '28614595d88fc5d4f47886cfbe106885-disneyland-paris-logo.png';
            }
            $hotel->setImage($tabHotels->image);
            $hotel->setStars($tabHotels->keys);

            $this->em->persist($hotel);
            $this->em->flush();
        }
    }

    public function setRestaurants($restaurants)
    {
        foreach ($restaurants->restaurants as $key=>$tabRestaurant) {
            dump($tabRestaurant);
            $restaurant = new Restaurants();
            $repo = $this->em->getRepository('DisneyDisneylandBundle:Restaurants');
            $restaurant->setId($tabRestaurant->id);
            $restaurant->setName($tabRestaurant->name);
            $restaurant->setPrice($tabRestaurant->price);
            if ($tabRestaurant->image == null) {
                $tabRestaurant->image = '28614595d88fc5d4f47886cfbe106885-disneyland-paris-logo.png';
            }
            $restaurant->setImage($tabRestaurant->image);
            $restaurant->setService($tabRestaurant->service);
            $restaurant->setLand($tabRestaurant->land);
            $restaurant->setParc($tabRestaurant->parc);
            $restaurant->setType($tabRestaurant->type);

            $this->em->persist($restaurant);
            $this->em->flush();
        }
    }

    public function setShows($shows)
    {
        foreach ($shows->shows as $key=>$tabShows) {
            dump($tabShows);
            $show = new Shows();
            $repo = $this->em->getRepository('DisneyDisneylandBundle:Shows');
            $show->setId($tabShows->id);
            $show->setName($tabShows->name);
            if ($tabShows->image == null) {
                $tabShows->image = '28614595d88fc5d4f47886cfbe106885-disneyland-paris-logo.png';
            }
            $show->setImage($tabShows->image);
            $show->setParc($tabShows->parc);
            $show->setLand($tabShows->land);

            $this->em->persist($show);
            $this->em->flush();
        }
    }

    public function setWaiting($waiting)
    {
        foreach ($waiting->waiting as $key=>$tabWaiting) {
            dump($tabWaiting);
            $objWaiting = new Waiting();
            $repo = $this->em->getRepository('DisneyDisneylandBundle:Waiting');
            $objWaiting->setIdAttraction($key);
            $objWaiting->setStatus($tabWaiting->status);
            $objWaiting->setTime($tabWaiting->time);

            $this->em->persist($objWaiting);
            $this->em->flush();
        }
    }
}