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

//    Can be omitted.
//    protected $TextCampaignFieldNames = null;

//    Can be omitted.
//    protected $MobileAppCampaignFieldNames = null;

//    Can be omitted.
//    protected $DynamicTextCampaignFieldNames = null;

//    Can be omitted.
//    protected $CpmBannerCampaignFieldNames = null;

//    Can be omitted.
//    protected $SmartCampaignFieldNames = null;

    public function getSelectionCriteria(): CampaignsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(CampaignsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see CampaignFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
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
     * @see TextCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getTextCampaignFieldNames(): ?array
    {
        return $this->TextCampaignFieldNames ?? null;
    }

    /**
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
     * @see MobileAppCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAppCampaignFieldNames(): ?array
    {
        return $this->MobileAppCampaignFieldNames ?? null;
    }

    /**
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
     * @see DynamicTextCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getDynamicTextCampaignFieldNames(): ?array
    {
        return $this->DynamicTextCampaignFieldNames ?? null;
    }

    /**
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
     * @see CpmBannerCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getCpmBannerCampaignFieldNames(): ?array
    {
        return $this->CpmBannerCampaignFieldNames ?? null;
    }

    /**
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
     * @see SmartCampaignFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartCampaignFieldNames(): ?array
    {
        return $this->SmartCampaignFieldNames ?? null;
    }

    /**
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
