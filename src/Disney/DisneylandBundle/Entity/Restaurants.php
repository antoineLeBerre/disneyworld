<?php

namespace Disney\DisneylandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurants
 *
 * @ORM\Table(name="restaurants")
 * @ORM\Entity(repositoryClass="Disney\DisneylandBundle\Repository\RestaurantsRepository")
 */
class Restaurants
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="parc", type="integer")
     */
    private $parc;

    /**
     * @var int
     *
     * @ORM\Column(name="land", type="integer")
     */
    private $land;

    /**
     * @var int
     *
     * @ORM\Column(name="service", type="integer")
     */
    private $service;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100)
     */
    private $image;

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Restaurants
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Restaurants
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set parc
     *
     * @param integer $parc
     *
     * @return Restaurants
     */
    public function setParc($parc)
    {
        $this->parc = $parc;

        return $this;
    }

    /**
     * Get parc
     *
     * @return int
     */
    public function getParc()
    {
        return $this->parc;
    }

    /**
     * Set land
     *
     * @param integer $land
     *
     * @return Restaurants
     */
    public function setLand($land)
    {
        $this->land = $land;

        return $this;
    }

    /**
     * Get land
     *
     * @return int
     */
    public function getLand()
    {
        return $this->land;
    }

    /**
     * Set service
     *
     * @param integer $service
     *
     * @return Restaurants
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return int
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Restaurants
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Restaurants
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Restaurants
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    public function getParcText()
    {
        $parc[1] = 'Parc Disneyland®';
        $parc[2] = 'Walt Disney Studios';

        return $parc[$this->parc];
    }

    public function getLandText()
    {
        $land[2] = 'Fantasyland';
        $land[5] = 'Toon Studio';
        $land[8] = 'Main Street, U.S.A.';

        return $land[$this->land];
    }

    public function getServiceText()
    {
        $service[1] = 'Service à table';
        $service[2] = 'Service au comptoir';

        return $service[$this->service];
    }
}

