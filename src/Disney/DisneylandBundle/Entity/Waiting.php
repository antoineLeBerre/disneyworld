<?php

namespace Disney\DisneylandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waiting
 *
 * @ORM\Table(name="waiting")
 * @ORM\Entity(repositoryClass="Disney\DisneylandBundle\Repository\WaitingRepository")
 */
class Waiting
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="id_attraction", type="string", length=255, unique=true)
     */
    private $idAttraction;

    /**
     * @var int
     *
     * @ORM\Column(name="time", type="integer")
     */
    private $time;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer")
     */
    private $status;


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
     * Set idAttraction
     *
     * @param string $idAttraction
     *
     * @return Waiting
     */
    public function setIdAttraction($idAttraction)
    {
        $this->idAttraction = $idAttraction;

        return $this;
    }

    /**
     * Get idAttraction
     *
     * @return string
     */
    public function getIdAttraction()
    {
        return $this->idAttraction;
    }

    /**
     * Set time
     *
     * @param integer $time
     *
     * @return Waiting
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Waiting
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }
}

