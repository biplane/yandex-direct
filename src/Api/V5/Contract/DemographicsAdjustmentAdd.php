<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DemographicsAdjustmentAdd
{
//    Can be omit.
//    protected $Gender = null;

//    Can be omit.
//    protected $Age = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of DemographicsAdjustmentAdd.
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
    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
