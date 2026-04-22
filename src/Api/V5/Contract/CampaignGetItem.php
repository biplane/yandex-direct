<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignGetItem
{
//    Can be omitted.
//    protected $ClientInfo;

//    Can be omitted.
//    protected $Notification;

//    Can be omitted.
//    protected $TimeZone;

//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $StartDate;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $Status;

//    Can be omitted.
//    protected $State;

//    Can be omitted.
//    protected $StatusPayment;

//    Can be omitted.
//    protected $StatusClarification;

//    Can be omitted.
//    protected $SourceId;

//    Can be omitted.
//    protected $Statistics;

//    Can be omitted.
//    protected $Currency;

//    Can be omitted.
//    protected $Funds;

//    Can be omitted.
//    protected $RepresentedBy;

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
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ClientInfo
     */
    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * Set ClientInfo
     *
     * @return $this
     */
    public function setClientInfo(?string $value)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Get Notification
     */
    public function getNotification(): ?CampaignNotification
    {
        return $this->Notification ?? null;
    }

    /**
     * Set Notification
     *
     * @return $this
     */
    public function setNotification(?CampaignNotification $value)
    {
        $this->Notification = $value;

        return $this;
    }

    /**
     * Get TimeZone
     */
    public function getTimeZone(): ?string
    {
        return $this->TimeZone ?? null;
    }

    /**
     * Set TimeZone
     *
     * @return $this
     */
    public function setTimeZone(?string $value)
    {
        $this->TimeZone = $value;

        return $this;
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
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
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignTypeGetEnum
     *
     * @return 'TEXT_CAMPAIGN'|'MOBILE_APP_CAMPAIGN'|'DYNAMIC_TEXT_CAMPAIGN'|'CPM_BANNER_CAMPAIGN'|'SMART_CAMPAIGN'|'UNIFIED_CAMPAIGN'|'UNKNOWN'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignTypeGetEnum
     *
     * @param 'TEXT_CAMPAIGN'|'MOBILE_APP_CAMPAIGN'|'DYNAMIC_TEXT_CAMPAIGN'|'CPM_BANNER_CAMPAIGN'|'SMART_CAMPAIGN'|'UNIFIED_CAMPAIGN'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStateGetEnum
     *
     * @return 'ARCHIVED'|'CONVERTED'|'ENDED'|'OFF'|'ON'|'SUSPENDED'|'UNKNOWN'|null
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Set State
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStateGetEnum
     *
     * @param 'ARCHIVED'|'CONVERTED'|'ENDED'|'OFF'|'ON'|'SUSPENDED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setState(?string $value)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Get StatusPayment
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum
     *
     * @return 'DISALLOWED'|'ALLOWED'|null
     */
    public function getStatusPayment(): ?string
    {
        return $this->StatusPayment ?? null;
    }

    /**
     * Set StatusPayment
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum
     *
     * @param 'DISALLOWED'|'ALLOWED'|null $value
     *
     * @return $this
     */
    public function setStatusPayment(?string $value)
    {
        $this->StatusPayment = $value;

        return $this;
    }

    /**
     * Get StatusClarification
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Set StatusClarification
     *
     * @return $this
     */
    public function setStatusClarification(?string $value)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Get SourceId
     */
    public function getSourceId(): ?int
    {
        return $this->SourceId ?? null;
    }

    /**
     * Set SourceId
     *
     * @return $this
     */
    public function setSourceId(?int $value)
    {
        $this->SourceId = $value;

        return $this;
    }

    /**
     * Get Statistics
     */
    public function getStatistics(): ?Statistics
    {
        return $this->Statistics ?? null;
    }

    /**
     * Set Statistics
     *
     * @return $this
     */
    public function setStatistics(?Statistics $value)
    {
        $this->Statistics = $value;

        return $this;
    }

    /**
     * Get Currency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum
     *
     * @return 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP'|null
     */
    public function getCurrency(): ?string
    {
        return $this->Currency ?? null;
    }

    /**
     * Set Currency
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum
     *
     * @param 'YND_FIXED'|'RUB'|'CHF'|'EUR'|'KZT'|'TRY'|'UAH'|'USD'|'BYN'|'GBP'|null $value
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Funds
     */
    public function getFunds(): ?FundsParam
    {
        return $this->Funds ?? null;
    }

    /**
     * Set Funds
     *
     * @return $this
     */
    public function setFunds(?FundsParam $value)
    {
        $this->Funds = $value;

        return $this;
    }

    /**
     * Get RepresentedBy
     */
    public function getRepresentedBy(): ?CampaignAssistant
    {
        return $this->RepresentedBy ?? null;
    }

    /**
     * Set RepresentedBy
     *
     * @return $this
     */
    public function setRepresentedBy(?CampaignAssistant $value)
    {
        $this->RepresentedBy = $value;

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
    public function getTextCampaign(): ?TextCampaignGetItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * Set TextCampaign
     *
     * @return $this
     */
    public function setTextCampaign(?TextCampaignGetItem $value)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Get UnifiedCampaign
     */
    public function getUnifiedCampaign(): ?UnifiedCampaignGetItem
    {
        return $this->UnifiedCampaign ?? null;
    }

    /**
     * Set UnifiedCampaign
     *
     * @return $this
     */
    public function setUnifiedCampaign(?UnifiedCampaignGetItem $value)
    {
        $this->UnifiedCampaign = $value;

        return $this;
    }

    /**
     * Get MobileAppCampaign
     */
    public function getMobileAppCampaign(): ?MobileAppCampaignGetItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * Set MobileAppCampaign
     *
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignGetItem $value)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Get DynamicTextCampaign
     */
    public function getDynamicTextCampaign(): ?DynamicTextCampaignGetItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * Set DynamicTextCampaign
     *
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignGetItem $value)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Get CpmBannerCampaign
     */
    public function getCpmBannerCampaign(): ?CpmBannerCampaignGetItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * Set CpmBannerCampaign
     *
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignGetItem $value)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    /**
     * Get SmartCampaign
     */
    public function getSmartCampaign(): ?SmartCampaignGetItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * Set SmartCampaign
     *
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignGetItem $value)
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
