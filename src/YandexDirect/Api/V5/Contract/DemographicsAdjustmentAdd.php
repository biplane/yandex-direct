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
     * @return DemographicsAdjustmentAdd
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
     * @return $this
     */
    public function setBidModifier($value)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

