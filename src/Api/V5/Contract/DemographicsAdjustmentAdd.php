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
//    protected $Gender = null;

//    Can be omitted.
//    protected $Age = null;

    protected $BidModifier = null;

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

    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
