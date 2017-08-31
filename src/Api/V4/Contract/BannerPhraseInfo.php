<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannerPhraseInfo
{

    protected $Phrase = null;

    protected $IsRubric = null;

    protected $Clicks = null;

    protected $FirstPlaceClicks = null;

    protected $PremiumClicks = null;

    protected $Shows = null;

    protected $Min = null;

    protected $Max = null;

    protected $PremiumMin = null;

    protected $PremiumMax = null;

    protected $CTR = null;

    protected $FirstPlaceCTR = null;

    protected $PremiumCTR = null;

    protected $LowCTRWarning = null;

    protected $LowCTR = null;

    protected $ContextPrice = null;

    protected $ContextCoverage = null;

    protected $BannerID = null;

    protected $Price = null;

    protected $Prices = null;

    protected $Coverage = null;

    protected $AutoBroker = null;

    protected $PhraseID = null;

    protected $CurrentOnSearch = null;

    protected $CampaignID = null;

    protected $MinPrice = null;

    protected $AutoBudgetPriority = null;

    protected $StatusPhraseModerate = null;

    protected $ContextLowCTR = null;

    protected $UserParams = null;

    protected $AuctionBids = null;

    protected $AdGroupID = null;

    protected $StatusPaused = null;

    protected $ContextClicks = null;

    protected $ContextShows = null;

    protected $Currency = null;

    /**
     * Creates a new instance of BannerPhraseInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Phrase.
     *
     * @return string|null
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * Sets Phrase.
     *
     * @param string|null $value
     * @return self
     */
    public function setPhrase($value = null)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Gets IsRubric.
     *
     * @return string|null
     */
    public function getIsRubric()
    {
        return $this->IsRubric;
    }

    /**
     * Sets IsRubric.
     *
     * @param string|null $value
     * @return self
     */
    public function setIsRubric($value = null)
    {
        $this->IsRubric = $value;

        return $this;
    }

    /**
     * Gets Clicks.
     *
     * @return int|null
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @param int|null $value
     * @return self
     */
    public function setClicks($value = null)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets FirstPlaceClicks.
     *
     * @return int|null
     */
    public function getFirstPlaceClicks()
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Sets FirstPlaceClicks.
     *
     * @param int|null $value
     * @return self
     */
    public function setFirstPlaceClicks($value = null)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    /**
     * Gets PremiumClicks.
     *
     * @return int|null
     */
    public function getPremiumClicks()
    {
        return $this->PremiumClicks;
    }

    /**
     * Sets PremiumClicks.
     *
     * @param int|null $value
     * @return self
     */
    public function setPremiumClicks($value = null)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    /**
     * Gets Shows.
     *
     * @return int|null
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @param int|null $value
     * @return self
     */
    public function setShows($value = null)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets Min.
     *
     * @return float|null
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * Sets Min.
     *
     * @param float|null $value
     * @return self
     */
    public function setMin($value = null)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Gets Max.
     *
     * @return float|null
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * Sets Max.
     *
     * @param float|null $value
     * @return self
     */
    public function setMax($value = null)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Gets PremiumMin.
     *
     * @return float|null
     */
    public function getPremiumMin()
    {
        return $this->PremiumMin;
    }

    /**
     * Sets PremiumMin.
     *
     * @param float|null $value
     * @return self
     */
    public function setPremiumMin($value = null)
    {
        $this->PremiumMin = $value;

        return $this;
    }

    /**
     * Gets PremiumMax.
     *
     * @return float|null
     */
    public function getPremiumMax()
    {
        return $this->PremiumMax;
    }

    /**
     * Sets PremiumMax.
     *
     * @param float|null $value
     * @return self
     */
    public function setPremiumMax($value = null)
    {
        $this->PremiumMax = $value;

        return $this;
    }

    /**
     * Gets CTR.
     *
     * @return float|null
     */
    public function getCTR()
    {
        return $this->CTR;
    }

    /**
     * Sets CTR.
     *
     * @param float|null $value
     * @return self
     */
    public function setCTR($value = null)
    {
        $this->CTR = $value;

        return $this;
    }

    /**
     * Gets FirstPlaceCTR.
     *
     * @return float|null
     */
    public function getFirstPlaceCTR()
    {
        return $this->FirstPlaceCTR;
    }

    /**
     * Sets FirstPlaceCTR.
     *
     * @param float|null $value
     * @return self
     */
    public function setFirstPlaceCTR($value = null)
    {
        $this->FirstPlaceCTR = $value;

        return $this;
    }

    /**
     * Gets PremiumCTR.
     *
     * @return float|null
     */
    public function getPremiumCTR()
    {
        return $this->PremiumCTR;
    }

    /**
     * Sets PremiumCTR.
     *
     * @param float|null $value
     * @return self
     */
    public function setPremiumCTR($value = null)
    {
        $this->PremiumCTR = $value;

        return $this;
    }

    /**
     * Gets LowCTRWarning.
     *
     * @return string|null
     */
    public function getLowCTRWarning()
    {
        return $this->LowCTRWarning;
    }

    /**
     * Sets LowCTRWarning.
     *
     * @param string|null $value
     * @return self
     */
    public function setLowCTRWarning($value = null)
    {
        $this->LowCTRWarning = $value;

        return $this;
    }

    /**
     * Gets LowCTR.
     *
     * @return string|null
     */
    public function getLowCTR()
    {
        return $this->LowCTR;
    }

    /**
     * Sets LowCTR.
     *
     * @param string|null $value
     * @return self
     */
    public function setLowCTR($value = null)
    {
        $this->LowCTR = $value;

        return $this;
    }

    /**
     * Gets ContextPrice.
     *
     * @return float|null
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * Sets ContextPrice.
     *
     * @param float|null $value
     * @return self
     */
    public function setContextPrice($value = null)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    /**
     * Gets ContextCoverage.
     *
     * @return CoverageInfo[]|null
     */
    public function getContextCoverage()
    {
        return $this->ContextCoverage;
    }

    /**
     * Sets ContextCoverage.
     *
     * @param CoverageInfo[]|null $value
     * @return self
     */
    public function setContextCoverage(array $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Gets BannerID.
     *
     * @return int|null
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @param int|null $value
     * @return self
     */
    public function setBannerID($value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets Price.
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param float|null $value
     * @return self
     */
    public function setPrice($value = null)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * Gets Prices.
     *
     * @return float[]|null
     */
    public function getPrices()
    {
        return $this->Prices;
    }

    /**
     * Sets Prices.
     *
     * @param float[]|null $value
     * @return self
     */
    public function setPrices(array $value = null)
    {
        $this->Prices = $value;

        return $this;
    }

    /**
     * Gets Coverage.
     *
     * @return CoverageInfo[]|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * Sets Coverage.
     *
     * @param CoverageInfo[]|null $value
     * @return self
     */
    public function setCoverage(array $value = null)
    {
        $this->Coverage = $value;

        return $this;
    }

    /**
     * Gets AutoBroker.
     *
     * @return string|null
     */
    public function getAutoBroker()
    {
        return $this->AutoBroker;
    }

    /**
     * Sets AutoBroker.
     *
     * @param string|null $value
     * @return self
     */
    public function setAutoBroker($value = null)
    {
        $this->AutoBroker = $value;

        return $this;
    }

    /**
     * Gets PhraseID.
     *
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @param int $value
     * @return self
     */
    public function setPhraseID($value)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets CurrentOnSearch.
     *
     * @return float|null
     */
    public function getCurrentOnSearch()
    {
        return $this->CurrentOnSearch;
    }

    /**
     * Sets CurrentOnSearch.
     *
     * @param float|null $value
     * @return self
     */
    public function setCurrentOnSearch($value = null)
    {
        $this->CurrentOnSearch = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return self
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets MinPrice.
     *
     * @return float|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * Sets MinPrice.
     *
     * @param float|null $value
     * @return self
     */
    public function setMinPrice($value = null)
    {
        $this->MinPrice = $value;

        return $this;
    }

    /**
     * Gets AutoBudgetPriority.
     *
     * @return string|null
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets AutoBudgetPriority.
     *
     * @param string|null $value
     * @return self
     */
    public function setAutoBudgetPriority($value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    /**
     * Gets StatusPhraseModerate.
     *
     * @return string|null
     */
    public function getStatusPhraseModerate()
    {
        return $this->StatusPhraseModerate;
    }

    /**
     * Sets StatusPhraseModerate.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusPhraseModerate($value = null)
    {
        $this->StatusPhraseModerate = $value;

        return $this;
    }

    /**
     * Gets ContextLowCTR.
     *
     * @return string|null
     */
    public function getContextLowCTR()
    {
        return $this->ContextLowCTR;
    }

    /**
     * Sets ContextLowCTR.
     *
     * @param string|null $value
     * @return self
     */
    public function setContextLowCTR($value = null)
    {
        $this->ContextLowCTR = $value;

        return $this;
    }

    /**
     * Gets UserParams.
     *
     * @return PhraseUserParams|null
     */
    public function getUserParams()
    {
        return $this->UserParams;
    }

    /**
     * Sets UserParams.
     *
     * @param PhraseUserParams|null $value
     * @return self
     */
    public function setUserParams(PhraseUserParams $value = null)
    {
        $this->UserParams = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     *
     * @return PhraseAuctionBids[]|null
     */
    public function getAuctionBids()
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @param PhraseAuctionBids[]|null $value
     * @return self
     */
    public function setAuctionBids(array $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }

    /**
     * Gets AdGroupID.
     *
     * @return int|null
     */
    public function getAdGroupID()
    {
        return $this->AdGroupID;
    }

    /**
     * Sets AdGroupID.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupID($value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    /**
     * Gets StatusPaused.
     *
     * @return string|null
     */
    public function getStatusPaused()
    {
        return $this->StatusPaused;
    }

    /**
     * Sets StatusPaused.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusPaused($value = null)
    {
        $this->StatusPaused = $value;

        return $this;
    }

    /**
     * Gets ContextClicks.
     *
     * @return int|null
     */
    public function getContextClicks()
    {
        return $this->ContextClicks;
    }

    /**
     * Sets ContextClicks.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextClicks($value = null)
    {
        $this->ContextClicks = $value;

        return $this;
    }

    /**
     * Gets ContextShows.
     *
     * @return int|null
     */
    public function getContextShows()
    {
        return $this->ContextShows;
    }

    /**
     * Sets ContextShows.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextShows($value = null)
    {
        $this->ContextShows = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return self
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

