<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierToggleItem
{
//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

    protected $Type = null;

    protected $Enabled = null;

    /**
     * Creates a new instance of BidModifierToggleItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @see BidModifierToggleTypeEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
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
     * Gets Enabled.
     *
     * @see YesNoEnum
     */
    public function getEnabled(): string
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
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
