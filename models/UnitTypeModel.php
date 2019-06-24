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
}