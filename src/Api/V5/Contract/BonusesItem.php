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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAwaitingBonus(): int
    {
        return $this->AwaitingBonus;
    }

    /**
     * @return $this
     */
    public function setAwaitingBonus(int $value)
    {
        $this->AwaitingBonus = $value;

        return $this;
    }

    public function getAwaitingBonusWithoutNds(): int
    {
        return $this->AwaitingBonusWithoutNds;
    }

    /**
     * @return $this
     */
    public function setAwaitingBonusWithoutNds(int $value)
    {
        $this->AwaitingBonusWithoutNds = $value;

        return $this;
    }
}
