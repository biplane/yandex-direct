<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BonusesItem
{
    /** @var int */
    protected $AwaitingBonus;

    /** @var int */
    protected $AwaitingBonusWithoutNds;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AwaitingBonus
     */
    public function getAwaitingBonus(): int
    {
        return $this->AwaitingBonus;
    }

    /**
     * Set AwaitingBonus
     *
     * @return $this
     */
    public function setAwaitingBonus(int $value)
    {
        $this->AwaitingBonus = $value;

        return $this;
    }

    /**
     * Get AwaitingBonusWithoutNds
     */
    public function getAwaitingBonusWithoutNds(): int
    {
        return $this->AwaitingBonusWithoutNds;
    }

    /**
     * Set AwaitingBonusWithoutNds
     *
     * @return $this
     */
    public function setAwaitingBonusWithoutNds(int $value)
    {
        $this->AwaitingBonusWithoutNds = $value;

        return $this;
    }
}
