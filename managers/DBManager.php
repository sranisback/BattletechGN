<?php
namespace Managers;

abstract class DBManager
{
    private $base;

    /** @param PDO $base */
    public function __construct(PDO $base)
    {
        $this->base = $base;
    }

    /** @return PDO */
    public function getBase(): PDO
    {
        return $this->base;
    }

    /** @param PDO $base */
    public function setBase(PDO $base): void
    {
        $this->base = $base;
    }
}