<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnitTypesRepository")
 */
class UnitTypes
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
    private $caliber;

    /**
     * @ORM\Column(type="integer")
     */
    private $armor;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Abilities", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="ability", referencedColumnName="id",nullable=false)
     */
    private $ability;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Icons", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="icons", referencedColumnName="id",nullable=false)
     */
    private $icon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCaliber(): ?int
    {
        return $this->caliber;
    }

    public function setCaliber(int $caliber): self
    {
        $this->caliber = $caliber;

        return $this;
    }

    public function getArmor(): ?int
    {
        return $this->armor;
    }

    public function setArmor(int $armor): self
    {
        $this->armor = $armor;

        return $this;
    }

    public function getAbility(): ?Abilities
    {
        return $this->ability;
    }

    public function setAbility(Abilities $ability): self
    {
        $this->ability = $ability;

        return $this;
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIcon(): ?Icons
    {
        return $this->icon;
    }

    public function setIcon(Icons $icon): self
    {
        $this->icon = $icon;

        return $this;
    }
}
