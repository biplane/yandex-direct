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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCurrency(): string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * @return CreditLimitsItem[]
     */
    public function getLimits(): array
    {
        return $this->Limits;
    }

    /**
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
