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

//    Can be omit.
//    protected $DailyBudget = null;

//    Can be omit.
//    protected $EndDate = null;

//    Can be omit.
//    protected $NegativeKeywords = null;

//    Can be omit.
//    protected $BlockedIps = null;

//    Can be omit.
//    protected $ExcludedSites = null;

//    Can be omit.
//    protected $TextCampaign = null;

//    Can be omit.
//    protected $MobileAppCampaign = null;

//    Can be omit.
//    protected $DynamicTextCampaign = null;

//    Can be omit.
//    protected $CpmBannerCampaign = null;

//    Can be omit.
//    protected $SmartCampaign = null;

//    Can be omit.
//    protected $TimeTargeting = null;

    /**
     * Creates a new instance of CampaignAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @return $this
     */
    public function setStartDate(string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets DailyBudget.
     */
    public function getDailyBudget(): ?DailyBudget
    {
        return $this->DailyBudget ?? null;
    }

    /**
     * Sets DailyBudget.
     *
     * @return $this
     */
    public function setDailyBudget(?DailyBudget $value = null)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate ?? null;
    }

    /**
     * Sets EndDate.
     *
     * @return $this
     */
    public function setEndDate(?string $value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Sets NegativeKeywords.
     *
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
     * Gets BlockedIps.
     *
     * @return string[]|null
     */
    public function getBlockedIps(): ?array
    {
        return $this->BlockedIps ?? null;
    }

    /**
     * Sets BlockedIps.
     *
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
     * Gets ExcludedSites.
     *
     * @return string[]|null
     */
    public function getExcludedSites(): ?array
    {
        return $this->ExcludedSites ?? null;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setExcludedSites(?array $value = null)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    /**
     * Gets TextCampaign.
     */
    public function getTextCampaign(): ?TextCampaignAddItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * Sets TextCampaign.
     *
     * @return $this
     */
    public function setTextCampaign(?TextCampaignAddItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     */
    public function getMobileAppCampaign(): ?MobileAppCampaignAddItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignAddItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaign.
     */
    public function getDynamicTextCampaign(): ?DynamicTextCampaignAddItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * Sets DynamicTextCampaign.
     *
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignAddItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Gets CpmBannerCampaign.
     */
    public function getCpmBannerCampaign(): ?CpmBannerCampaignAddItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * Sets CpmBannerCampaign.
     *
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignAddItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    /**
     * Gets SmartCampaign.
     */
    public function getSmartCampaign(): ?SmartCampaignAddItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * Sets SmartCampaign.
     *
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignAddItem $value = null)
    {
        $this->SmartCampaign = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     */
    public function getTimeTargeting(): ?TimeTargetingAdd
    {
        return $this->TimeTargeting ?? null;
    }

    /**
     * Sets TimeTargeting.
     *
     * @return $this
     */
    public function setTimeTargeting(?TimeTargetingAdd $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }
}
