<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AwaitingBonus.
     *
     * @return int
     */
    public function getAwaitingBonus()
    {
        return $this->AwaitingBonus;
    }

    /**
     * Sets AwaitingBonus.
     *
     * @param int $value
     * @return $this
     */
    public function setAwaitingBonus($value)
    {
        $this->AwaitingBonus = $value;

        return $this;
    }

    /**
     * Gets AwaitingBonusWithoutNds.
     *
     * @return int
     */
    public function getAwaitingBonusWithoutNds()
    {
        return $this->AwaitingBonusWithoutNds;
    }

    /**
     * Sets AwaitingBonusWithoutNds.
     *
     * @param int $value
     * @return $this
     */
    public function setAwaitingBonusWithoutNds($value)
    {
        $this->AwaitingBonusWithoutNds = $value;

        return $this;
    }


}

