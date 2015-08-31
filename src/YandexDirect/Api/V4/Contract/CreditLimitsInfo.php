<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return CreditLimitsInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the Limits.
     *
     * @return CreditLimitsItem[]
     */
    public function getLimits()
    {
        return $this->Limits;
    }

    /**
     * Sets the Limits.
     *
     * @param CreditLimitsItem[] $Limits
     *
     * @return CreditLimitsInfo
     */
    public function setLimits(array $Limits)
    {
        $this->Limits = $Limits;

        return $this;
    }
}