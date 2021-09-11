<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignGetItem extends CampaignBase
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $StartDate = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $StatusPayment = null;

//    Can be omit.
//    protected $StatusClarification = null;

//    Can be omit.
//    protected $SourceId = null;

//    Can be omit.
//    protected $Statistics = null;

//    Can be omit.
//    protected $Currency = null;

//    Can be omit.
//    protected $Funds = null;

//    Can be omit.
//    protected $RepresentedBy = null;

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
     * Creates a new instance of CampaignGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate ?? null;
    }

    /**
     * Sets StartDate.
     *
     * @return $this
     */
    public function setStartDate(?string $value = null)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @see CampaignTypeGetEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
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
     * Gets Status.
     *
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Sets Status.
     *
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
     * Gets State.
     *
     * @see CampaignStateGetEnum
     */
    public function getState(): ?string
    {
        return $this->State ?? null;
    }

    /**
     * Sets State.
     *
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
     * Gets StatusPayment.
     *
     * @see CampaignStatusPaymentEnum
     */
    public function getStatusPayment(): ?string
    {
        return $this->StatusPayment ?? null;
    }

    /**
     * Sets StatusPayment.
     *
     * @see CampaignStatusPaymentEnum
     *
     * @return $this
     */
    public function setStatusPayment(?string $value = null)
    {
        $this->StatusPayment = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     */
    public function getStatusClarification(): ?string
    {
        return $this->StatusClarification ?? null;
    }

    /**
     * Sets StatusClarification.
     *
     * @return $this
     */
    public function setStatusClarification(?string $value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets SourceId.
     */
    public function getSourceId(): ?int
    {
        return $this->SourceId ?? null;
    }

    /**
     * Sets SourceId.
     *
     * @return $this
     */
    public function setSourceId(?int $value = null)
    {
        $this->SourceId = $value;

        return $this;
    }

    /**
     * Gets Statistics.
     */
    public function getStatistics(): ?Statistics
    {
        return $this->Statistics ?? null;
    }

    /**
     * Sets Statistics.
     *
     * @return $this
     */
    public function setStatistics(?Statistics $value = null)
    {
        $this->Statistics = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @see CurrencyEnum
     */
    public function getCurrency(): ?string
    {
        return $this->Currency ?? null;
    }

    /**
     * Sets Currency.
     *
     * @see CurrencyEnum
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Funds.
     */
    public function getFunds(): ?FundsParam
    {
        return $this->Funds ?? null;
    }

    /**
     * Sets Funds.
     *
     * @return $this
     */
    public function setFunds(?FundsParam $value = null)
    {
        $this->Funds = $value;

        return $this;
    }

    /**
     * Gets RepresentedBy.
     */
    public function getRepresentedBy(): ?CampaignAssistant
    {
        return $this->RepresentedBy ?? null;
    }

    /**
     * Sets RepresentedBy.
     *
     * @return $this
     */
    public function setRepresentedBy(?CampaignAssistant $value = null)
    {
        $this->RepresentedBy = $value;

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
    public function getTextCampaign(): ?TextCampaignGetItem
    {
        return $this->TextCampaign ?? null;
    }

    /**
     * Sets TextCampaign.
     *
     * @return $this
     */
    public function setTextCampaign(?TextCampaignGetItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     */
    public function getMobileAppCampaign(): ?MobileAppCampaignGetItem
    {
        return $this->MobileAppCampaign ?? null;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @return $this
     */
    public function setMobileAppCampaign(?MobileAppCampaignGetItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaign.
     */
    public function getDynamicTextCampaign(): ?DynamicTextCampaignGetItem
    {
        return $this->DynamicTextCampaign ?? null;
    }

    /**
     * Sets DynamicTextCampaign.
     *
     * @return $this
     */
    public function setDynamicTextCampaign(?DynamicTextCampaignGetItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Gets CpmBannerCampaign.
     */
    public function getCpmBannerCampaign(): ?CpmBannerCampaignGetItem
    {
        return $this->CpmBannerCampaign ?? null;
    }

    /**
     * Sets CpmBannerCampaign.
     *
     * @return $this
     */
    public function setCpmBannerCampaign(?CpmBannerCampaignGetItem $value = null)
    {
        $this->CpmBannerCampaign = $value;

        return $this;
    }

    /**
     * Gets SmartCampaign.
     */
    public function getSmartCampaign(): ?SmartCampaignGetItem
    {
        return $this->SmartCampaign ?? null;
    }

    /**
     * Sets SmartCampaign.
     *
     * @return $this
     */
    public function setSmartCampaign(?SmartCampaignGetItem $value = null)
    {
        $this->SmartCampaign = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     */
    public function getTimeTargeting(): ?TimeTargeting
    {
        return $this->TimeTargeting ?? null;
    }

    /**
     * Sets TimeTargeting.
     *
     * @return $this
     */
    public function setTimeTargeting(?TimeTargeting $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }
}
