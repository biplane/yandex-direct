<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Gender.
     *
     * @see GenderEnum
     */
    public function getGender(): ?string
    {
        return $this->Gender ?? null;
    }

    /**
     * Sets Gender.
     *
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
     * Gets Age.
     *
     * @see AgeRangeEnum
     */
    public function getAge(): ?string
    {
        return $this->Age ?? null;
    }

    /**
     * Sets Age.
     *
     * @see AgeRangeEnum
     *
     * @return $this
     */
    public function setAge(?string $value = null)
    {
        $this->Age = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     */
    public function getBidModifier(): ?int
    {
        return $this->BidModifier ?? null;
    }

    /**
     * Sets BidModifier.
     *
     * @return $this
     */
    public function setBidModifier(?int $value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @see YesNoEnum
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * Sets Enabled.
     *
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
