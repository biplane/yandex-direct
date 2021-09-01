<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpvAddBase
{

    protected $AverageCpv = null;

    protected $SpendLimit = null;

    /**
     * Creates a new instance of StrategyAverageCpvAddBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpv.
     *
     * @return int
     */
    public function getAverageCpv()
    {
        return $this->AverageCpv;
    }

    /**
     * Sets AverageCpv.
     *
     * @param int $value
     * @return $this
     */
    public function setAverageCpv($value)
    {
        $this->AverageCpv = $value;

        return $this;
    }

    /**
     * Gets SpendLimit.
     *
     * @return int
     */
    public function getSpendLimit()
    {
        return $this->SpendLimit;
    }

    /**
     * Sets SpendLimit.
     *
     * @param int $value
     * @return $this
     */
    public function setSpendLimit($value)
    {
        $this->SpendLimit = $value;

        return $this;
    }


}

