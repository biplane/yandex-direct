<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BonusesItem
{
    protected $AwaitingBonus = null;

    protected $AwaitingBonusWithoutNds = null;

    /**
     * Creates a new instance of BonusesItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AwaitingBonus.
     */
    public function getAwaitingBonus(): int
    {
        return $this->AwaitingBonus;
    }

    /**
     * Sets AwaitingBonus.
     *
     * @return $this
     */
    public function setAwaitingBonus(int $value)
    {
        $this->AwaitingBonus = $value;

        return $this;
    }

    /**
     * Gets AwaitingBonusWithoutNds.
     */
    public function getAwaitingBonusWithoutNds(): int
    {
        return $this->AwaitingBonusWithoutNds;
    }

    /**
     * Sets AwaitingBonusWithoutNds.
     *
     * @return $this
     */
    public function setAwaitingBonusWithoutNds(int $value)
    {
        $this->AwaitingBonusWithoutNds = $value;

        return $this;
    }
}
