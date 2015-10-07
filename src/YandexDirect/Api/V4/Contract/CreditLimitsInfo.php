<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreditLimitsInfo
{

    protected $Currency = null;

    protected $Limits = array(
        
    );

    /**
     * Creates a new instance of CreditLimitsInfo.
     *
     * @return CreditLimitsInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string $value
     * @return $this
     */
    public function setCurrency($value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Limits.
     *
     * @return CreditLimitsItem[]
     */
    public function getLimits()
    {
        return $this->Limits;
    }

    /**
     * Sets Limits.
     *
     * @param CreditLimitsItem[] $value
     * @return $this
     */
    public function setLimits(array $value)
    {
        $this->Limits = $value;

        return $this;
    }


}

