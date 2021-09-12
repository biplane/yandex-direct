<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DemographicsAdjustmentGet
{
//    Can be omitted.
//    protected $Gender = null;

//    Can be omitted.
//    protected $Age = null;

//    Can be omitted.
//    protected $BidModifier = null;

//    Can be omitted.
//    protected $Enabled = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see GenderEnum
     */
    public function getGender(): ?string
    {
        return $this->Gender ?? null;
    }

    /**
     * @see GenderEnum
     *
     * @return $this
     */
    public function setGender(?string $value = null)
    {
        $this->Gender = $value;

        return $this;
    }

    /**
     * @see AgeRangeEnum
     */
    public function getAge(): ?string
    {
        return $this->Age ?? null;
    }

    /**
     * @see AgeRangeEnum
     *
     * @return $this
     */
    public function setAge(?string $value = null)
    {
        $this->Age = $value;

        return $this;
    }

    public function getBidModifier(): ?int
    {
        return $this->BidModifier ?? null;
    }

    /**
     * @return $this
     */
    public function setBidModifier(?int $value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setEnabled(?string $value = null)
    {
        $this->Enabled = $value;

        return $this;
    }
}
