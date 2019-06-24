<?php

class UnitTypeModel
{
    /** @var string */
    private $name;

    /** @var int */
    private $caliber;

    /** @var int */
    private $armor;

    /** @var string */
    private $image;

    /** @return string */
    public function getName(): string
    {
        return $this->name;
    }

    /** @return int */
    public function getCaliber(): int
    {
        return $this->caliber;
    }

    /** @return int */
    public function getArmor(): int
    {
        return $this->armor;
    }

    /** @return string */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int $caliber
     */
    public function setCaliber(int $caliber): void
    {
        $this->caliber = $caliber;
    }

    /**
     * @param int $armor
     */
    public function setArmor(int $armor): void
    {
        $this->armor = $armor;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }


}