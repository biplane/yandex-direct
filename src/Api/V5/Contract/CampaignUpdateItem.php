<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignUpdateItem extends CampaignBase
{
    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $StartDate = null;

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

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    public function getStartDate(): ?string
    {
        return $this->StartDate ?? null;
    }

    /**
     * @return $this
     */
    public function setStartDate(?string $value = null)
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

    public function getTextCampaign(): ?TextCampaignUpdateItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setTextCampaign(?TextCampaignUpdateItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    public function getMobileAppCampaign(): ?MobileAppCampaignUpdateItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignUpdateItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    public function getDynamicTextCampaign(): ?DynamicTextCampaignUpdateItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignUpdateItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    public function getCpmBannerCampaign(): ?CpmBannerCampaignUpdateItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignUpdateItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    public function getSmartCampaign(): ?SmartCampaignUpdateItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignUpdateItem $value = null)
    {
        $this->SmartCampaign = $value;

        return $this;
    }

    public function getTimeTargeting(): ?TimeTargeting
    {
        return $this->TimeTargeting ?? null;
    }

    /**
     * @return $this
     */
    public function setTimeTargeting(?TimeTargeting $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }
}
