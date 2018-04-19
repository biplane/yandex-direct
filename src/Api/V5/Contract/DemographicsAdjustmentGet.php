<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DemographicsAdjustmentGet
{

//    Can be omit.
//    protected $Gender = null;

//    Can be omit.
//    protected $Age = null;

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $Enabled = null;

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
        return isset($this->Gender) ? $this->Gender : null;
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
        return isset($this->Age) ? $this->Age : null;
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
        return isset($this->BidModifier) ? $this->BidModifier : null;
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
        return isset($this->Enabled) ? $this->Enabled : null;
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

