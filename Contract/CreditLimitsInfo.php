<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class CreditLimitsInfo
{
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var CreditLimitsItem[]
     */
    protected $Limits;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return CreditLimitsInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * @return CreditLimitsItem[]
     */
    public function getLimits()
    {
        return $this->Limits;
    }

    /**
     * @param CreditLimitsItem[] $Limits
     * @return CreditLimitsInfo
     */
    public function setLimits(array $Limits)
    {
        $this->Limits = $Limits;

        return $this;
    }
}