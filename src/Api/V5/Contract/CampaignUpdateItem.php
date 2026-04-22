<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignUpdateItem extends CampaignBase
{
    /** @var int */
    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $StartDate;

//    Can be omitted.
//    protected $DailyBudget;

//    Can be omitted.
//    protected $EndDate;

//    Can be omitted.
//    protected $NegativeKeywords;

//    Can be omitted.
//    protected $BlockedIps;

//    Can be omitted.
//    protected $ExcludedSites;

//    Can be omitted.
//    protected $TextCampaign;

//    Can be omitted.
//    protected $UnifiedCampaign;

//    Can be omitted.
//    protected $MobileAppCampaign;

//    Can be omitted.
//    protected $DynamicTextCampaign;

//    Can be omitted.
//    protected $CpmBannerCampaign;

//    Can be omitted.
//    protected $SmartCampaign;

//    Can be omitted.
//    protected $TimeTargeting;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get StartDate
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate ?? null;
    }

    /**
     * Set StartDate
     *
     * @return $this
     */
    public function setStartDate(?string $value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Get DailyBudget
     */
    public function getDailyBudget(): ?DailyBudget
    {
        return $this->DailyBudget ?? null;
    }

    /**
     * Set DailyBudget
     *
     * @return $this
     */
    public function setDailyBudget(?DailyBudget $value)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    /**
     * Get EndDate
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate ?? null;
    }

    /**
     * Set EndDate
     *
     * @return $this
     */
    public function setEndDate(?string $value)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Get NegativeKeywords
     *
     * @return non-empty-list<string>|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Set NegativeKeywords
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Get BlockedIps
     *
     * @return non-empty-list<string>|null
     */
    public function getBlockedIps(): ?array
    {
        return $this->BlockedIps ?? null;
    }

    /**
     * Set BlockedIps
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setBlockedIps(?array $value)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * Get ExcludedSites
     *
     * @return non-empty-list<string>|null
     */
    public function getExcludedSites(): ?array
    {
        return $this->ExcludedSites ?? null;
    }

    /**
     * Set ExcludedSites
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setExcludedSites(?array $value)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    /**
     * Get TextCampaign
     */
    public function getTextCampaign(): ?TextCampaignUpdateItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * Set TextCampaign
     *
     * @return $this
     */
    public function setTextCampaign(?TextCampaignUpdateItem $value)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Get UnifiedCampaign
     */
    public function getUnifiedCampaign(): ?UnifiedCampaignUpdateItem
    {
        return $this->UnifiedCampaign ?? null;
    }

    /**
     * Set UnifiedCampaign
     *
     * @return $this
     */
    public function setUnifiedCampaign(?UnifiedCampaignUpdateItem $value)
    {
        $this->UnifiedCampaign = $value;

        return $this;
    }

    /**
     * Get MobileAppCampaign
     */
    public function getMobileAppCampaign(): ?MobileAppCampaignUpdateItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * Set MobileAppCampaign
     *
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignUpdateItem $value)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Get DynamicTextCampaign
     */
    public function getDynamicTextCampaign(): ?DynamicTextCampaignUpdateItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * Set DynamicTextCampaign
     *
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignUpdateItem $value)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Get CpmBannerCampaign
     */
    public function getCpmBannerCampaign(): ?CpmBannerCampaignUpdateItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * Set CpmBannerCampaign
     *
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignUpdateItem $value)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    /**
     * Get SmartCampaign
     */
    public function getSmartCampaign(): ?SmartCampaignUpdateItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * Set SmartCampaign
     *
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignUpdateItem $value)
    {
        $this->SmartCampaign = $value;

        return $this;
    }

    /**
     * Get TimeTargeting
     */
    public function getTimeTargeting(): ?TimeTargeting
    {
        return $this->TimeTargeting ?? null;
    }

    /**
     * Set TimeTargeting
     *
     * @return $this
     */
    public function setTimeTargeting(?TimeTargeting $value)
    {
        $this->TimeTargeting = $value;

        return $this;
    }
}
