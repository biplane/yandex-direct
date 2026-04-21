<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CreditLimitsInfo
{
    /** @var string */
    protected $Currency;

//    Can be omitted.
//    protected $Limits;

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
     * Get Currency
     */
    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Limits
     *
     * @return list<CreditLimitsItem>
     */
    public function getLimits(): array
    {
        return $this->Limits ?? [];
    }

    /**
     * Set Limits
     *
     * @param list<CreditLimitsItem> $value
     *
     * @return $this
     */
    public function setLimits(array $value)
    {
        $this->Limits = $value;

        return $this;
    }
}
