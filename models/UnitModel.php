<?php
/**
 * Classe pour gérer les unités (les Etoiles chez les Clans)
 */

class UnitModel
{
    /** @var UnitTypeModel */
    private $type;

    /** @var integer */
    private $integrity;

    /** @var integer */
    private $level;

    /** @var integer */
    private $id;

    /**
     * Damages dealt to the unit.
     * @var integer
     */
    private $damage = 0;

    /**
     * Flag to tag
     * @var bool
     */
    private $skipAttacks;

    /**
     * Drapeau utilisé pour les capacités.
     * @var bool
     */
    private $evadeAttacks;

    /**
     * @param array $model
     * @param int $level
     * @param int $integrity
     */
    public function __construct(int $type, int $level = 0, int $integrity = 50)
    {
        $this->level = $level;
        $this->integrity = $integrity;

        $this->damage = 0;
        $this->evadeAttacks = false;
        $this->skipAttacks = false;
    }

    /** @return string */
    public function getType(): string
    {
        return $this->type->getName();
    }

    /** @return int */
    public function getCaliber(): int
    {
        return $this->type->getCaliber();
    }

    /** @return int */
    public function getArmor(): int
    {
        return $this->type->getArmor();
    }

    /** @return int */
    public function getIntegrity(): int
    {
        return $this->integrity;
    }

    /** @return int */
    public function getLevel(): int
    {
        return $this->level;
    }

    /** @return int */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /** @return bool */
    public function isSkipAttacks(): bool
    {
        return $this->skipAttacks;
    }

    /** @return bool */
    public function isEvadeAttacks(): bool
    {
        return $this->evadeAttacks;
    }

    /** @param int $integrity */
    public function setIntegrity(int $integrity): void
    {
        $this->integrity = $integrity;
    }

    /** @param int $level */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /** @param int $damage */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    /** @param bool $skipAttacks */
    public function setSkipAttacks(bool $skipAttacks): void
    {
        $this->skipAttacks = $skipAttacks;
    }

    /** @param bool $evadeAttacks */
    public function setEvadeAttacks(bool $evadeAttacks): void
    {
        $this->evadeAttacks = $evadeAttacks;
    }

    /** @param int $id */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}