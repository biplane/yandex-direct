<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignGetItem extends CampaignBase
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $StartDate = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $Status = null;

//    Can be omitted.
//    protected $State = null;

//    Can be omitted.
//    protected $StatusPayment = null;

//    Can be omitted.
//    protected $StatusClarification = null;

//    Can be omitted.
//    protected $SourceId = null;

//    Can be omitted.
//    protected $Statistics = null;

//    Can be omitted.
//    protected $Currency = null;

//    Can be omitted.
//    protected $Funds = null;

//    Can be omitted.
//    protected $RepresentedBy = null;

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

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
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

    /**
     * @see CampaignTypeGetEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see CampaignTypeGetEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * @see CampaignStateGetEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * @see CampaignStateGetEnum
     *
     * @return $this
     */
    public function setState(?string $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * @see CampaignStatusPaymentEnum
     */
    public function getStatusPayment(): ?string
    {
        return $this->StatusPayment ?? null;
    }

    /**
     * @see CampaignStatusPaymentEnum
     *
     * @return $this
     */
    public function setStatusPayment(?string $value = null)
    {
        $this->StatusPayment = $value;

        return $this;
    }

    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    public function getSourceId(): ?int
    {
        return $this->SourceId ?? null;
    }

    /**
     * @return $this
     */
    public function setSourceId(?int $value = null)
    {
        $this->SourceId = $value;

        return $this;
    }

    public function getStatistics(): ?Statistics
    {
        return $this->Statistics ?? null;
    }

    /**
     * @return $this
     */
    public function setStatistics(?Statistics $value = null)
    {
        $this->Statistics = $value;

        return $this;
    }

    /**
     * @see CurrencyEnum
     */
    public function getCurrency(): ?string
    {
        return $this->Currency ?? null;
    }

    /**
     * @see CurrencyEnum
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getFunds(): ?FundsParam
    {
        return $this->Funds ?? null;
    }

    /**
     * @return $this
     */
    public function setFunds(?FundsParam $value = null)
    {
        $this->Funds = $value;

        return $this;
    }

    public function getRepresentedBy(): ?CampaignAssistant
    {
        return $this->RepresentedBy ?? null;
    }

    /**
     * @return $this
     */
    public function setRepresentedBy(?CampaignAssistant $value = null)
    {
        $this->RepresentedBy = $value;

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

    public function getTextCampaign(): ?TextCampaignGetItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setTextCampaign(?TextCampaignGetItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    public function getMobileAppCampaign(): ?MobileAppCampaignGetItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignGetItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    public function getDynamicTextCampaign(): ?DynamicTextCampaignGetItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignGetItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    public function getCpmBannerCampaign(): ?CpmBannerCampaignGetItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignGetItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    public function getSmartCampaign(): ?SmartCampaignGetItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignGetItem $value = null)
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
