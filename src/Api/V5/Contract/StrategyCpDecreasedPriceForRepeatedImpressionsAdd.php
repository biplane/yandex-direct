<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyCpDecreasedPriceForRepeatedImpressionsAdd extends StrategyDecreasedPriceForRepeatedImpressionsAddBase
{
    protected $StartDate = null;

    protected $EndDate = null;

    protected $AutoContinue = null;

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
