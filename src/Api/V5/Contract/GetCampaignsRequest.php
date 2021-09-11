<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetCampaignsRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $TextCampaignFieldNames = null;

//    Can be omit.
//    protected $MobileAppCampaignFieldNames = null;

//    Can be omit.
//    protected $DynamicTextCampaignFieldNames = null;

//    Can be omit.
//    protected $CpmBannerCampaignFieldNames = null;

//    Can be omit.
//    protected $SmartCampaignFieldNames = null;

    /**
     * Creates a new instance of GetCampaignsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): CampaignsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(CampaignsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see CampaignFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see CampaignFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets TextCampaignFieldNames.
     *
     * @see TextCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getTextCampaignFieldNames(): ?array
    {
        return $this->TextCampaignFieldNames ?? null;
    }

    /**
     * Sets TextCampaignFieldNames.
     *
     * @see TextCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTextCampaignFieldNames(?array $value = null)
    {
        $this->TextCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaignFieldNames.
     *
     * @see MobileAppCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppCampaignFieldNames(): ?array
    {
        return $this->MobileAppCampaignFieldNames ?? null;
    }

    /**
     * Sets MobileAppCampaignFieldNames.
     *
     * @see MobileAppCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAppCampaignFieldNames(?array $value = null)
    {
        $this->MobileAppCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaignFieldNames.
     *
     * @see DynamicTextCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextCampaignFieldNames(): ?array
    {
        return $this->DynamicTextCampaignFieldNames ?? null;
    }

    /**
     * Sets DynamicTextCampaignFieldNames.
     *
     * @see DynamicTextCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDynamicTextCampaignFieldNames(?array $value = null)
    {
        $this->DynamicTextCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets CpmBannerCampaignFieldNames.
     *
     * @see CpmBannerCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getCpmBannerCampaignFieldNames(): ?array
    {
        return $this->CpmBannerCampaignFieldNames ?? null;
    }

    /**
     * Sets CpmBannerCampaignFieldNames.
     *
     * @see CpmBannerCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCpmBannerCampaignFieldNames(?array $value = null)
    {
        $this->CpmBannerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Gets SmartCampaignFieldNames.
     *
     * @see SmartCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartCampaignFieldNames(): ?array
    {
        return $this->SmartCampaignFieldNames ?? null;
    }

    /**
     * Sets SmartCampaignFieldNames.
     *
     * @see SmartCampaignFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSmartCampaignFieldNames(?array $value = null)
    {
        $this->SmartCampaignFieldNames = $value;

        return $this;
    }
}
