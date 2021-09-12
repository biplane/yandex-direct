<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignAddItem extends CampaignBase
{
    protected $Name = null;

    protected $StartDate = null;

//    Can be omitted.
//    protected $DailyBudget = null;

//    Can be omitted.
//    protected $EndDate = null;

//    Can be omitted.
//    protected $NegativeKeywords = null;

//    Can be omitted.
//    protected $BlockedIps = null;

//    Can be omitted.
//    protected $ExcludedSites = null;

//    Can be omitted.
//    protected $TextCampaign = null;

//    Can be omitted.
//    protected $MobileAppCampaign = null;

//    Can be omitted.
//    protected $DynamicTextCampaign = null;

//    Can be omitted.
//    protected $CpmBannerCampaign = null;

//    Can be omitted.
//    protected $SmartCampaign = null;

//    Can be omitted.
//    protected $TimeTargeting = null;

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    public function getDailyBudget(): ?DailyBudget
    {
        return $this->DailyBudget ?? null;
    }

    /**
     * @return $this
     */
    public function setDailyBudget(?DailyBudget $value = null)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    public function getEndDate(): ?string
    {
        return $this->EndDate ?? null;
    }

    /**
     * @return $this
     */
    public function setEndDate(?string $value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getBlockedIps(): ?array
    {
        return $this->BlockedIps ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setBlockedIps(?array $value = null)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getExcludedSites(): ?array
    {
        return $this->ExcludedSites ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setExcludedSites(?array $value = null)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    public function getTextCampaign(): ?TextCampaignAddItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setTextCampaign(?TextCampaignAddItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    public function getMobileAppCampaign(): ?MobileAppCampaignAddItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignAddItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    public function getDynamicTextCampaign(): ?DynamicTextCampaignAddItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignAddItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    public function getCpmBannerCampaign(): ?CpmBannerCampaignAddItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignAddItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    public function getSmartCampaign(): ?SmartCampaignAddItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignAddItem $value = null)
    {
        $this->SmartCampaign = $value;

        return $this;
    }

    public function getTimeTargeting(): ?TimeTargetingAdd
    {
        return $this->TimeTargeting ?? null;
    }

    /**
     * @return $this
     */
    public function setTimeTargeting(?TimeTargetingAdd $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }
}
