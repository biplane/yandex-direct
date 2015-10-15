<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DemographicsAdjustmentGet
{

    protected $Gender = null;

    protected $Age = null;

    protected $BidModifier = null;

    protected $Enabled = null;

    /**
     * Creates a new instance of DemographicsAdjustmentGet.
     *
     * @return DemographicsAdjustmentGet
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Gender.
     *
     * @return GenderEnum|null
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Sets Gender.
     *
     * @param GenderEnum|null $value
     * @return $this
     */
    public function setGender(GenderEnum $value = null)
    {
        $this->Gender = $value;

        return $this;
    }

    /**
     * Gets Age.
     *
     * @return AgeRangeEnum|null
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Sets Age.
     *
     * @param AgeRangeEnum|null $value
     * @return $this
     */
    public function setAge(AgeRangeEnum $value = null)
    {
        $this->Age = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     *
     * @return int|null
     */
    public function getBidModifier()
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return YesNoEnum|null
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setEnabled(YesNoEnum $value = null)
    {
        $this->Enabled = $value;

        return $this;
    }


}

