<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbilitiesRepository")
 */
class Abilities
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $name_abil;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameAbil(): ?string
    {
        return $this->name_abil;
    }

    public function setNameAbil(string $name_abil): self
    {
        $this->name_abil = $name_abil;

        return $this;
    }
}
