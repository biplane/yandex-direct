<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierToggleItem
{
//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $AdGroupId = null;

    protected $Type = null;

    protected $Enabled = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * @see BidModifierToggleTypeEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @see BidModifierToggleTypeEnum
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getEnabled(): string
    {
        return $this->Enabled;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setEnabled(string $value)
    {
        $this->Enabled = $value;

        return $this;
    }
}
