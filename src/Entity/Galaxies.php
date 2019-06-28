<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GalaxiesRepository")
 */
class Galaxies
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Commanders", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="commander", referencedColumnName="id", nullable=false)
     */
    private $commander;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCommander(): ?Commanders
    {
        return $this->commander;
    }

    public function setCommander(Commanders $commander): self
    {
        $this->commander = $commander;

        return $this;
    }
}
