<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return isset($this->CampaignId) ? $this->CampaignId : null;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return self
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string
     * @see BidModifierToggleTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string $value
     * @return self
     * @see BidModifierToggleTypeEnum
     */
    public function setType($value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
     * @param string $value
     * @return self
     * @see YesNoEnum
     */
    public function setEnabled($value)
    {
        $this->Enabled = $value;

        return $this;
    }


}

