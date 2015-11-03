<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignUpdateItem extends CampaignBase
{

    protected $Id = null;

    protected $Name = null;

    protected $StartDate = null;

    protected $DailyBudget = null;

    protected $EndDate = null;

    protected $NegativeKeywords = null;

    protected $BlockedIps = null;

    protected $ExcludedSites = null;

    protected $TextCampaign = null;

    protected $MobileAppCampaign = null;

    /**
     * Creates a new instance of CampaignUpdateItem.
     *
     * @return CampaignUpdateItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets StartDate.
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Sets StartDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStartDate($value = null)
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
        return $this->DailyBudget;
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
        return $this->EndDate;
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
     * @return struct[]|null
     */
    public function getNegativeKeywords()
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param struct[]|null $value
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
     * @return struct[]|null
     */
    public function getBlockedIps()
    {
        return $this->BlockedIps;
    }

    /**
     * Sets BlockedIps.
     *
     * @param struct[]|null $value
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
     * @return struct[]|null
     */
    public function getExcludedSites()
    {
        return $this->ExcludedSites;
    }

    /**
     * Sets ExcludedSites.
     *
     * @param struct[]|null $value
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
     * @return TextCampaignUpdateItem|null
     */
    public function getTextCampaign()
    {
        return $this->TextCampaign;
    }

    /**
     * Sets TextCampaign.
     *
     * @param TextCampaignUpdateItem|null $value
     * @return $this
     */
    public function setTextCampaign(TextCampaignUpdateItem $value = null)
    {
        $this->TextCampaign = $value;

        return $this;
    }

    /**
     * Gets MobileAppCampaign.
     *
     * @return MobileAppCampaignUpdateItem|null
     */
    public function getMobileAppCampaign()
    {
        return $this->MobileAppCampaign;
    }

    /**
     * Sets MobileAppCampaign.
     *
     * @param MobileAppCampaignUpdateItem|null $value
     * @return $this
     */
    public function setMobileAppCampaign(MobileAppCampaignUpdateItem $value = null)
    {
        $this->MobileAppCampaign = $value;

        return $this;
    }


}

