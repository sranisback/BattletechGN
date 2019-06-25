<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClustersRepository")
 */
class Clusters
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Galaxies")
     * @ORM\JoinColumn(name="galaxy", referencedColumnName="id", nullable=false)
     */
    private $galaxy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGalaxy(): ?Galaxies
    {
        return $this->galaxy;
    }

    public function setGalaxy(?Galaxies $galaxy): self
    {
        $this->galaxy = $galaxy;

        return $this;
    }

}
