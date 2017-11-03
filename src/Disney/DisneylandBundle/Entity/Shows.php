<?php

namespace Disney\DisneylandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shows
 *
 * @ORM\Table(name="shows")
 * @ORM\Entity(repositoryClass="Disney\DisneylandBundle\Repository\ShowsRepository")
 */
class Shows
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
     * @ORM\Column(name="name", type="string", length=100)
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
     * @return Sh
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
     * @return Shows
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
     * @return Shows
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
     * @return Shows
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
     * Set image
     *
     * @param string $image
     *
     * @return Shows
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

