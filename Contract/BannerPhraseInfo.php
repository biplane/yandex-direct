<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class BannerPhraseInfo
{
    const ISRUBRIC_YES = 'Yes';
    const ISRUBRIC_NO = 'No';

    const AUTOBROKER_YES = 'Yes';
    const AUTOBROKER_NO = 'No';

    const AUTOBUDGETPRIORITY_LOW = 'Low';
    const AUTOBUDGETPRIORITY_MEDIUM = 'Medium';
    const AUTOBUDGETPRIORITY_HIGH = 'High';

    /**
     * @var string
     */
    protected $Phrase;
    /**
     * @var string
     */
    protected $IsRubric;
    /**
     * @var int
     */
    protected $Clicks;
    /**
     * @var int
     */
    protected $FirstPlaceClicks;
    /**
     * @var int
     */
    protected $PremiumClicks;
    /**
     * @var int
     */
    protected $Shows;
    /**
     * @var float
     */
    protected $Min;
    /**
     * @var float
     */
    protected $Max;
    /**
     * @var float
     */
    protected $PremiumMin;
    /**
     * @var float
     */
    protected $PremiumMax;
    /**
     * @var float
     */
    protected $CTR;
    /**
     * @var float
     */
    protected $FirstPlaceCTR;
    /**
     * @var float
     */
    protected $PremiumCTR;
    /**
     * @var string
     */
    protected $LowCTRWarning;
    /**
     * @var string
     */
    protected $LowCTR;
    /**
     * @var float
     */
    protected $ContextPrice;
    /**
     * @var CoverageInfo[]
     */
    protected $ContextCoverage;
    /**
     * @var int
     */
    protected $BannerID;
    /**
     * @var float
     */
    protected $Price;
    /**
     * @var float[]
     */
    protected $Prices;
    /**
     * @var CoverageInfo[]
     */
    protected $Coverage;
    /**
     * @var string
     */
    protected $AutoBroker;
    /**
     * @var int
     */
    protected $PhraseID;
    /**
     * @var float
     */
    protected $CurrentOnSearch;
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var float
     */
    protected $MinPrice;
    /**
     * @var string
     */
    protected $AutoBudgetPriority;
    /**
     * @var string
     */
    protected $StatusPhraseModerate;
    /**
     * @var string
     */
    protected $ContextLowCTR;
    /**
     * @var PhraseUserParams
     */
    protected $UserParams;
    /**
     * @var int
     */
    protected $AdGroupID;
    /**
     * @var string
     */
    protected $StatusPaused;
    /**
     * @var int
     */
    protected $ContextClicks;
    /**
     * @var int
     */
    protected $ContextShows;
    /**
     * @var string
     */
    protected $Currency;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Phrase.
     *
     * @return string
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * Sets the Phrase.
     *
     * @param string $Phrase
     *
     * @return BannerPhraseInfo
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * Gets the IsRubric.
     *
     * @return string
     */
    public function getIsRubric()
    {
        return $this->IsRubric;
    }

    /**
     * Sets the IsRubric.
     *
     * @param string $IsRubric
     *
     * @return BannerPhraseInfo
     */
    public function setIsRubric($IsRubric)
    {
        $this->IsRubric = $IsRubric;

        return $this;
    }

    /**
     * Gets the Clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets the Clicks.
     *
     * @param int $Clicks
     *
     * @return BannerPhraseInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * Gets the FirstPlaceClicks.
     *
     * @return int
     */
    public function getFirstPlaceClicks()
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Sets the FirstPlaceClicks.
     *
     * @param int $FirstPlaceClicks
     *
     * @return BannerPhraseInfo
     */
    public function setFirstPlaceClicks($FirstPlaceClicks)
    {
        $this->FirstPlaceClicks = $FirstPlaceClicks;

        return $this;
    }

    /**
     * Gets the PremiumClicks.
     *
     * @return int
     */
    public function getPremiumClicks()
    {
        return $this->PremiumClicks;
    }

    /**
     * Sets the PremiumClicks.
     *
     * @param int $PremiumClicks
     *
     * @return BannerPhraseInfo
     */
    public function setPremiumClicks($PremiumClicks)
    {
        $this->PremiumClicks = $PremiumClicks;

        return $this;
    }

    /**
     * Gets the Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets the Shows.
     *
     * @param int $Shows
     *
     * @return BannerPhraseInfo
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * Gets the Min.
     *
     * @return float
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * Sets the Min.
     *
     * @param float $Min
     *
     * @return BannerPhraseInfo
     */
    public function setMin($Min)
    {
        $this->Min = $Min;

        return $this;
    }

    /**
     * Gets the Max.
     *
     * @return float
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * Sets the Max.
     *
     * @param float $Max
     *
     * @return BannerPhraseInfo
     */
    public function setMax($Max)
    {
        $this->Max = $Max;

        return $this;
    }

    /**
     * Gets the PremiumMin.
     *
     * @return float
     */
    public function getPremiumMin()
    {
        return $this->PremiumMin;
    }

    /**
     * Sets the PremiumMin.
     *
     * @param float $PremiumMin
     *
     * @return BannerPhraseInfo
     */
    public function setPremiumMin($PremiumMin)
    {
        $this->PremiumMin = $PremiumMin;

        return $this;
    }

    /**
     * Gets the PremiumMax.
     *
     * @return float
     */
    public function getPremiumMax()
    {
        return $this->PremiumMax;
    }

    /**
     * Sets the PremiumMax.
     *
     * @param float $PremiumMax
     *
     * @return BannerPhraseInfo
     */
    public function setPremiumMax($PremiumMax)
    {
        $this->PremiumMax = $PremiumMax;

        return $this;
    }

    /**
     * Gets the CTR.
     *
     * @return float
     */
    public function getCTR()
    {
        return $this->CTR;
    }

    /**
     * Sets the CTR.
     *
     * @param float $CTR
     *
     * @return BannerPhraseInfo
     */
    public function setCTR($CTR)
    {
        $this->CTR = $CTR;

        return $this;
    }

    /**
     * Gets the FirstPlaceCTR.
     *
     * @return float
     */
    public function getFirstPlaceCTR()
    {
        return $this->FirstPlaceCTR;
    }

    /**
     * Sets the FirstPlaceCTR.
     *
     * @param float $FirstPlaceCTR
     *
     * @return BannerPhraseInfo
     */
    public function setFirstPlaceCTR($FirstPlaceCTR)
    {
        $this->FirstPlaceCTR = $FirstPlaceCTR;

        return $this;
    }

    /**
     * Gets the PremiumCTR.
     *
     * @return float
     */
    public function getPremiumCTR()
    {
        return $this->PremiumCTR;
    }

    /**
     * Sets the PremiumCTR.
     *
     * @param float $PremiumCTR
     *
     * @return BannerPhraseInfo
     */
    public function setPremiumCTR($PremiumCTR)
    {
        $this->PremiumCTR = $PremiumCTR;

        return $this;
    }

    /**
     * Gets the LowCTRWarning.
     *
     * @return string
     */
    public function getLowCTRWarning()
    {
        return $this->LowCTRWarning;
    }

    /**
     * Sets the LowCTRWarning.
     *
     * @param string $LowCTRWarning
     *
     * @return BannerPhraseInfo
     */
    public function setLowCTRWarning($LowCTRWarning)
    {
        $this->LowCTRWarning = $LowCTRWarning;

        return $this;
    }

    /**
     * Gets the LowCTR.
     *
     * @return string
     */
    public function getLowCTR()
    {
        return $this->LowCTR;
    }

    /**
     * Sets the LowCTR.
     *
     * @param string $LowCTR
     *
     * @return BannerPhraseInfo
     */
    public function setLowCTR($LowCTR)
    {
        $this->LowCTR = $LowCTR;

        return $this;
    }

    /**
     * Gets the ContextPrice.
     *
     * @return float
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * Sets the ContextPrice.
     *
     * @param float $ContextPrice
     *
     * @return BannerPhraseInfo
     */
    public function setContextPrice($ContextPrice)
    {
        $this->ContextPrice = $ContextPrice;

        return $this;
    }

    /**
     * Gets the ContextCoverage.
     *
     * @return CoverageInfo[]
     */
    public function getContextCoverage()
    {
        return $this->ContextCoverage;
    }

    /**
     * Sets the ContextCoverage.
     *
     * @param CoverageInfo[] $ContextCoverage
     *
     * @return BannerPhraseInfo
     */
    public function setContextCoverage(array $ContextCoverage)
    {
        $this->ContextCoverage = $ContextCoverage;

        return $this;
    }

    /**
     * Gets the BannerID.
     *
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets the BannerID.
     *
     * @param int $BannerID
     *
     * @return BannerPhraseInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * Gets the Price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets the Price.
     *
     * @param float $Price
     *
     * @return BannerPhraseInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * Gets the Prices.
     *
     * @return float[]
     */
    public function getPrices()
    {
        return $this->Prices;
    }

    /**
     * Sets the Prices.
     *
     * @param float[] $Prices
     *
     * @return BannerPhraseInfo
     */
    public function setPrices(array $Prices)
    {
        $this->Prices = $Prices;

        return $this;
    }

    /**
     * Gets the Coverage.
     *
     * @return CoverageInfo[]
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * Sets the Coverage.
     *
     * @param CoverageInfo[] $Coverage
     *
     * @return BannerPhraseInfo
     */
    public function setCoverage(array $Coverage)
    {
        $this->Coverage = $Coverage;

        return $this;
    }

    /**
     * Gets the AutoBroker.
     *
     * @return string
     */
    public function getAutoBroker()
    {
        return $this->AutoBroker;
    }

    /**
     * Sets the AutoBroker.
     *
     * @param string $AutoBroker
     *
     * @return BannerPhraseInfo
     */
    public function setAutoBroker($AutoBroker)
    {
        $this->AutoBroker = $AutoBroker;

        return $this;
    }

    /**
     * Gets the PhraseID.
     *
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets the PhraseID.
     *
     * @param int $PhraseID
     *
     * @return BannerPhraseInfo
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * Gets the CurrentOnSearch.
     *
     * @return float
     */
    public function getCurrentOnSearch()
    {
        return $this->CurrentOnSearch;
    }

    /**
     * Sets the CurrentOnSearch.
     *
     * @param float $CurrentOnSearch
     *
     * @return BannerPhraseInfo
     */
    public function setCurrentOnSearch($CurrentOnSearch)
    {
        $this->CurrentOnSearch = $CurrentOnSearch;

        return $this;
    }

    /**
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return BannerPhraseInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the MinPrice.
     *
     * @return float
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * Sets the MinPrice.
     *
     * @param float $MinPrice
     *
     * @return BannerPhraseInfo
     */
    public function setMinPrice($MinPrice)
    {
        $this->MinPrice = $MinPrice;

        return $this;
    }

    /**
     * Gets the AutoBudgetPriority.
     *
     * @return string
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets the AutoBudgetPriority.
     *
     * @param string $AutoBudgetPriority
     *
     * @return BannerPhraseInfo
     */
    public function setAutoBudgetPriority($AutoBudgetPriority)
    {
        $this->AutoBudgetPriority = $AutoBudgetPriority;

        return $this;
    }

    /**
     * Gets the StatusPhraseModerate.
     *
     * @return string
     */
    public function getStatusPhraseModerate()
    {
        return $this->StatusPhraseModerate;
    }

    /**
     * Sets the StatusPhraseModerate.
     *
     * @param string $StatusPhraseModerate
     *
     * @return BannerPhraseInfo
     */
    public function setStatusPhraseModerate($StatusPhraseModerate)
    {
        $this->StatusPhraseModerate = $StatusPhraseModerate;

        return $this;
    }

    /**
     * Gets the ContextLowCTR.
     *
     * @return string
     */
    public function getContextLowCTR()
    {
        return $this->ContextLowCTR;
    }

    /**
     * Sets the ContextLowCTR.
     *
     * @param string $ContextLowCTR
     *
     * @return BannerPhraseInfo
     */
    public function setContextLowCTR($ContextLowCTR)
    {
        $this->ContextLowCTR = $ContextLowCTR;

        return $this;
    }

    /**
     * Gets the UserParams.
     *
     * @return PhraseUserParams
     */
    public function getUserParams()
    {
        return $this->UserParams;
    }

    /**
     * Sets the UserParams.
     *
     * @param PhraseUserParams $UserParams
     *
     * @return BannerPhraseInfo
     */
    public function setUserParams(PhraseUserParams $UserParams)
    {
        $this->UserParams = $UserParams;

        return $this;
    }

    /**
     * Gets the AdGroupID.
     *
     * @return int
     */
    public function getAdGroupID()
    {
        return $this->AdGroupID;
    }

    /**
     * Sets the AdGroupID.
     *
     * @param int $AdGroupID
     *
     * @return BannerPhraseInfo
     */
    public function setAdGroupID($AdGroupID)
    {
        $this->AdGroupID = $AdGroupID;

        return $this;
    }

    /**
     * Gets the StatusPaused.
     *
     * @return string
     */
    public function getStatusPaused()
    {
        return $this->StatusPaused;
    }

    /**
     * Sets the StatusPaused.
     *
     * @param string $StatusPaused
     *
     * @return BannerPhraseInfo
     */
    public function setStatusPaused($StatusPaused)
    {
        $this->StatusPaused = $StatusPaused;

        return $this;
    }

    /**
     * Gets the ContextClicks.
     *
     * @return int
     */
    public function getContextClicks()
    {
        return $this->ContextClicks;
    }

    /**
     * Sets the ContextClicks.
     *
     * @param int $ContextClicks
     *
     * @return BannerPhraseInfo
     */
    public function setContextClicks($ContextClicks)
    {
        $this->ContextClicks = $ContextClicks;

        return $this;
    }

    /**
     * Gets the ContextShows.
     *
     * @return int
     */
    public function getContextShows()
    {
        return $this->ContextShows;
    }

    /**
     * Sets the ContextShows.
     *
     * @param int $ContextShows
     *
     * @return BannerPhraseInfo
     */
    public function setContextShows($ContextShows)
    {
        $this->ContextShows = $ContextShows;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return BannerPhraseInfo
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}