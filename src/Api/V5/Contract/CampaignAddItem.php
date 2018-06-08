<?php

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
//    protected $TimeTargeting = null;

    /**
     * Creates a new instance of CampaignAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string $value
     * @return $this
     */
    public function setStartDate($value)
    {
        $this->StartDate = $value;

        return $this;
    }

    /**
     * Gets DailyBudget.
     *
     * @return DailyBudget|null
     */
    public function getDailyBudget()
    {
        return isset($this->DailyBudget) ? $this->DailyBudget : null;
    }

    /**
     * Sets DailyBudget.
     *
     * @param DailyBudget|null $value
     * @return $this
     */
    public function setDailyBudget(DailyBudget $value = null)
    {
        $this->DailyBudget = $value;

        return $this;
    }

    /**
     * Gets EndDate.
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }

    /**
     * Sets EndDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setEndDate($value = null)
    {
        $this->EndDate = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords()
    {
        return isset($this->NegativeKeywords) ? $this->NegativeKeywords : null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets BlockedIps.
     *
     * @return string[]|null
     */
    public function getBlockedIps()
    {
        return isset($this->BlockedIps) ? $this->BlockedIps : null;
    }

    /**
     * Sets BlockedIps.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setBlockedIps(array $value = null)
    {
        $this->BlockedIps = $value;

        return $this;
    }

    /**
     * Gets ExcludedSites.
     *
     * @return string[]|null
     */
    public function getExcludedSites()
    {
        return isset($this->ExcludedSites) ? $this->ExcludedSites : null;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setExcludedSites(array $value = null)
    {
        $this->ExcludedSites = $value;

        return $this;
    }

    /**
     * Gets TextCampaign.
     *
     * @return TextCampaignAddItem|null
     */
    public function getTextCampaign()
    {
        return isset($this->TextCampaign) ? $this->TextCampaign : null;
    }

    /**
     * Sets TextCampaign.
     *
     * @param TextCampaignAddItem|null $value
     * @return $this
     */
    public function setTextCampaign(TextCampaignAddItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     *
     * @return MobileAppCampaignAddItem|null
     */
    public function getMobileAppCampaign()
    {
        return isset($this->MobileAppCampaign) ? $this->MobileAppCampaign : null;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @param MobileAppCampaignAddItem|null $value
     * @return $this
     */
    public function setMobileAppCampaign(MobileAppCampaignAddItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }

    /**
     * Gets DynamicTextCampaign.
     *
     * @return DynamicTextCampaignAddItem|null
     */
    public function getDynamicTextCampaign()
    {
        return isset($this->DynamicTextCampaign) ? $this->DynamicTextCampaign : null;
    }

    /**
     * Sets DynamicTextCampaign.
     *
     * @param DynamicTextCampaignAddItem|null $value
     * @return $this
     */
    public function setDynamicTextCampaign(DynamicTextCampaignAddItem $value = null)
    {
        $this->DynamicTextCampaign = $value;

        return $this;
    }

    /**
     * Gets TimeTargeting.
     *
     * @return TimeTargetingAdd|null
     */
    public function getTimeTargeting()
    {
        return isset($this->TimeTargeting) ? $this->TimeTargeting : null;
    }

    /**
     * Sets TimeTargeting.
     *
     * @param TimeTargetingAdd|null $value
     * @return $this
     */
    public function setTimeTargeting(TimeTargetingAdd $value = null)
    {
        $this->TimeTargeting = $value;

        return $this;
    }


}

