<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DemographicsAdjustmentAdd
{

    protected $Gender = null;

    protected $Age = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of DemographicsAdjustmentAdd.
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
     * @return int
     */
    public function getBidModifier()
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @param int $value
     * @return self
     */
    public function setBidModifier($value)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

