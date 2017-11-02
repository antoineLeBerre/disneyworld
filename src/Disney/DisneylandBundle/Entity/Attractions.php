<?php

namespace Disney\DisneylandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attractions
 *
 * @ORM\Table(name="attractions")
 * @ORM\Entity(repositoryClass="Disney\DisneylandBundle\Repository\AttractionsRepository")
 */
class Attractions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="park", type="integer")
     */
    private $park;

    /**
     * @var int
     *
     * @ORM\Column(name="land", type="integer")
     */
    private $land;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="min_size", type="integer", nullable=true)
     */
    private $minSize;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


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
     * @return Attractions
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
     * @param integer $park
     *
     * @return Attractions
     */
    public function setPark($park)
    {
        $this->park = $park;

        return $this;
    }

    /**
     * Get parc
     *
     * @return int
     */
    public function getPark()
    {
        return $this->park;
    }

    /**
     * Set land
     *
     * @param integer $land
     *
     * @return Attractions
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
     * Set age
     *
     * @param integer $age
     *
     * @return Attractions
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set minSize
     *
     * @param integer $minSize
     *
     * @return Attractions
     */
    public function setMinSize($minSize)
    {
        $this->minSize = $minSize;

        return $this;
    }

    /**
     * Get minSize
     *
     * @return int
     */
    public function getMinSize()
    {
        return $this->minSize;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Attractions
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
}

