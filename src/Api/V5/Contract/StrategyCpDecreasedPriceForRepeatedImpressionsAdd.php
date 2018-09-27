<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyCpDecreasedPriceForRepeatedImpressionsAdd extends StrategyDecreasedPriceForRepeatedImpressionsAddBase
{

    protected $StartDate = null;

    protected $EndDate = null;

    protected $AutoContinue = null;

    /**
     * Creates a new instance of StrategyCpDecreasedPriceForRepeatedImpressionsAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Sets EndDate.
     *
     * @param string $value
     * @return $this
     */
    public function setEndDate($value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets AutoContinue.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getAutoContinue()
    {
        return $this->AutoContinue;
    }

    /**
     * Sets AutoContinue.
     *
     * @param string $value
     * @return $this
     * @see YesNoEnum
     */
    public function setAutoContinue($value)
    {
        $this->AutoContinue = $value;

        return $this;
    }


}

