<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreditLimitsInfo
{
    protected $Currency = null;

    protected $Limits = [];

    /**
     * Creates a new instance of CreditLimitsInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Limits.
     *
     * @return CreditLimitsItem[]
     */
    public function getLimits(): array
    {
        return $this->Limits;
    }

    /**
     * Sets Limits.
     *
     * @param CreditLimitsItem[] $value
     *
     * @return $this
     */
    public function setLimits(array $value)
    {
        $this->Limits = $value;

        return $this;
    }
}
