<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingAdjustmentGet
{
//    Can be omitted.
//    protected $RetargetingConditionId;

//    Can be omitted.
//    protected $BidModifier;

//    Can be omitted.
//    protected $Accessible;

//    Can be omitted.
//    protected $Enabled;

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
     * Get RetargetingConditionId
     */
    public function getRetargetingConditionId(): ?int
    {
        return $this->RetargetingConditionId ?? null;
    }

    /**
     * Set RetargetingConditionId
     *
     * @return $this
     */
    public function setRetargetingConditionId(?int $value)
    {
        $this->RetargetingConditionId = $value;

        return $this;
    }

    /**
     * Get BidModifier
     */
    public function getBidModifier(): ?int
    {
        return $this->BidModifier ?? null;
    }

    /**
     * Set BidModifier
     *
     * @return $this
     */
    public function setBidModifier(?int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Get Accessible
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getAccessible(): ?string
    {
        return $this->Accessible ?? null;
    }

    /**
     * Set Accessible
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setAccessible(?string $value)
    {
        $this->Accessible = $value;

        return $this;
    }

    /**
     * Get Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * Set Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setEnabled(?string $value)
    {
        $this->Enabled = $value;

        return $this;
    }
}
