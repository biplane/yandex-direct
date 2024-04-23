<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CustomPeriodBudget
{
    protected $SpendLimit = null;

    protected $StartDate = null;

    protected $EndDate = null;

    protected $AutoContinue = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSpendLimit(): int
    {
        return $this->SpendLimit;
    }

    /**
     * @return $this
     */
    public function setSpendLimit(int $value)
    {
        $this->SpendLimit = $value;

        return $this;
    }

    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getAutoContinue(): string
    {
        return $this->AutoContinue;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAutoContinue(string $value)
    {
        $this->AutoContinue = $value;

        return $this;
    }
}
