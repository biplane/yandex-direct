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
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Gender.
     *
     * @return string|null
     * @see GenderEnum
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Sets Gender.
     *
     * @param string|null $value
     * @return self
     * @see GenderEnum
     */
    public function setGender($value = null)
    {
        $this->Gender = $value;

        return $this;
    }

    /**
     * Gets Age.
     *
     * @return string|null
     * @see AgeRangeEnum
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * Sets Age.
     *
     * @param string|null $value
     * @return self
     * @see AgeRangeEnum
     */
    public function setAge($value = null)
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
     * @return self
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setEnabled($value = null)
    {
        $this->Enabled = $value;

        return $this;
    }


}

