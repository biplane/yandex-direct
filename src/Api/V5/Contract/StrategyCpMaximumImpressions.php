<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyCpMaximumImpressions extends StrategyMaximumImpressionsBase
{
    protected $StartDate = null;

    protected $EndDate = null;

    protected $AutoContinue = null;

    /**
     * Creates a new instance of StrategyCpMaximumImpressions.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets StartDate.
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @return $this
     */
    public function setEndDate(string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets AutoContinue.
     *
     * @see YesNoEnum
     */
    public function getAutoContinue(): string
    {
        return $this->AutoContinue;
    }

    /**
     * Sets AutoContinue.
     *
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
