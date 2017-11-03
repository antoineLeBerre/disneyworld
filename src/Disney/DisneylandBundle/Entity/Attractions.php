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
     * @ORM\OneToOne(targetEntity="Disney\DisneylandBundle\Entity\Waiting", cascade={"persist"})
     */
    private $waiting;


    /**
     * Set id
     *
     * @param string $id
     *
     * @return Attractions
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
     * @param integer $parc
     *
     * @return Attractions
     */
    public function setparc($parc)
    {
        $this->parc = $parc;

        return $this;
    }

    /**
     * Get parc
     *
     * @return int
     */
    public function getparc()
    {
        return $this->parc;
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

    public function getparcText()
    {
        $parc[1] = 'Parc Disneyland®';
        $parc[2] = 'Walt Disney Studios';

        return $parc[$this->parc];
    }

    public function getLandText()
    {
        $land[1] = 'Adventureland';
        $land[2] = 'Fantasyland';
        $land[3] = 'Discoveryland';
        $land[4] = 'Frontierland';
        $land[5] = 'Toon Studio';
        $land[6] = 'Backlot';
        $land[7] = 'Production';

        return $land[$this->land];
    }

    public function getAgeText()
    {
        $age[1] = 'Enfants';
        $age[2] = 'Adolescents';
        $age[3] = 'Adultes';
        $age[4] = 'Tout âge';

        return $age[$this->age];
    }

    /**
     * Set waiting
     *
     * @param \Disney\DisneylandBundle\Entity\Waiting $waiting
     *
     * @return Attractions
     */
    public function setWaiting(\Disney\DisneylandBundle\Entity\Waiting $waiting = null)
    {
        $this->waiting = $waiting;

        return $this;
    }

    /**
     * Get waiting
     *
     * @return \Disney\DisneylandBundle\Entity\Waiting
     */
    public function getWaiting()
    {
        return $this->waiting;
    }
}
