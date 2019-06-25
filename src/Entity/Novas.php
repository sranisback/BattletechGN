<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NovasRepository")
 */
class Novas
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Clusters")
     * @ORM\JoinColumn(name="cluster", referencedColumnName="id", nullable=false)
     */
    private $cluster;

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

    public function getCluster(): ?Clusters
    {
        return $this->cluster;
    }

    public function setCluster(?Clusters $cluster): self
    {
        $this->cluster = $cluster;

        return $this;
    }
}
