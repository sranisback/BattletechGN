<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StarsRepository")
 */
class Stars
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $integrity;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\UnitTypes", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Novas")
     * @ORM\JoinColumn(name="nova", referencedColumnName="id", nullable=false)
     */
    private $nova;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntegrity(): ?int
    {
        return $this->integrity;
    }

    public function setIntegrity(int $integrity): self
    {
        $this->integrity = $integrity;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getType(): ?UnitTypes
    {
        return $this->type;
    }

    public function setType(UnitTypes $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNova(): ?Novas
    {
        return $this->nova;
    }

    public function setNova(?Novas $nova): self
    {
        $this->nova = $nova;

        return $this;
    }
}
