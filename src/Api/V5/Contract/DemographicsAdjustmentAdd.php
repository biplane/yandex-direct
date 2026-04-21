<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DemographicsAdjustmentAdd
{
//    Can be omitted.
//    protected $Gender;

//    Can be omitted.
//    protected $Age;

    /** @var int */
    protected $BidModifier;

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
     * Get Gender
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\GenderEnum
     *
     * @return 'GENDER_MALE'|'GENDER_FEMALE'|null
     */
    public function getGender(): ?string
    {
        return $this->Gender ?? null;
    }

    /**
     * Set Gender
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\GenderEnum
     *
     * @param 'GENDER_MALE'|'GENDER_FEMALE'|null $value
     *
     * @return $this
     */
    public function setGender(?string $value)
    {
        $this->Gender = $value;

        return $this;
    }

    /**
     * Get Age
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum
     *
     * @return 'AGE_0_17'|'AGE_18_24'|'AGE_25_34'|'AGE_35_44'|'AGE_45'|'AGE_45_54'|'AGE_55'|null
     */
    public function getAge(): ?string
    {
        return $this->Age ?? null;
    }

    /**
     * Set Age
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum
     *
     * @param 'AGE_0_17'|'AGE_18_24'|'AGE_25_34'|'AGE_35_44'|'AGE_45'|'AGE_45_54'|'AGE_55'|null $value
     *
     * @return $this
     */
    public function setAge(?string $value)
    {
        $this->Age = $value;

        return $this;
    }

    /**
     * Get BidModifier
     */
    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * Set BidModifier
     *
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
