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
    /** @var int */
    protected $SpendLimit;

    /** @var string */
    protected $StartDate;

    /** @var string */
    protected $EndDate;

    /** @var 'YES'|'NO' */
    protected $AutoContinue;

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
     * Get SpendLimit
     */
    public function getSpendLimit(): int
    {
        return $this->SpendLimit;
    }

    /**
     * Set SpendLimit
     *
     * @return $this
     */
    public function setSpendLimit(int $value)
    {
        $this->SpendLimit = $value;

        return $this;
    }

    /**
     * Get StartDate
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * Set StartDate
     *
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Get EndDate
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * Set EndDate
     *
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Get AutoContinue
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getAutoContinue(): string
    {
        return $this->AutoContinue;
    }

    /**
     * Set AutoContinue
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setAutoContinue(string $value)
    {
        $this->AutoContinue = $value;

        return $this;
    }
}
