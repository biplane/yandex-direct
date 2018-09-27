<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumImpressionsBase
{

    protected $AverageCpm = null;

    protected $SpendLimit = null;

    /**
     * Creates a new instance of StrategyMaximumImpressionsBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpm.
     *
     * @return int
     */
    public function getAverageCpm()
    {
        return $this->AverageCpm;
    }

    /**
     * Sets AverageCpm.
     *
     * @param int $value
     * @return $this
     */
    public function setAverageCpm($value)
    {
        $this->AverageCpm = $value;

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

