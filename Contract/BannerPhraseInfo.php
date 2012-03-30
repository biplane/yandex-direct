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
     * @param string $phrase
     * @param int $campaignId
     * @param int $bannerId
     * @param int $phraseId
     */
    public function __construct($phrase = null, $campaignId = null, $bannerId = null, $phraseId = null)
    {
        $this->Phrase = $phrase;
        $this->CampaignID = $campaignId;
        $this->BannerID = $bannerId;
        $this->PhraseID = $phraseId;
    }

    /**
     * @return string
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * @param string $Phrase
     * @return BannerPhraseInfo
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsRubric()
    {
        return $this->IsRubric;
    }

    /**
     * @param string $IsRubric
     * @return BannerPhraseInfo
     */
    public function setIsRubric($IsRubric)
    {
        $this->IsRubric = $IsRubric;

        return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return BannerPhraseInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * @return int
     */
    public function getFirstPlaceClicks()
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * @param int $FirstPlaceClicks
     * @return BannerPhraseInfo
     */
    public function setFirstPlaceClicks($FirstPlaceClicks)
    {
        $this->FirstPlaceClicks = $FirstPlaceClicks;

        return $this;
    }

    /**
     * @return int
     */
    public function getPremiumClicks()
    {
        return $this->PremiumClicks;
    }

    /**
     * @param int $PremiumClicks
     * @return BannerPhraseInfo
     */
    public function setPremiumClicks($PremiumClicks)
    {
        $this->PremiumClicks = $PremiumClicks;

        return $this;
    }

    /**
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * @param int $Shows
     * @return BannerPhraseInfo
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * @return float
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * @param float $Min
     * @return BannerPhraseInfo
     */
    public function setMin($Min)
    {
        $this->Min = $Min;

        return $this;
    }

    /**
     * @return float
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * @param float $Max
     * @return BannerPhraseInfo
     */
    public function setMax($Max)
    {
        $this->Max = $Max;

        return $this;
    }

    /**
     * @return float
     */
    public function getPremiumMin()
    {
        return $this->PremiumMin;
    }

    /**
     * @param float $PremiumMin
     * @return BannerPhraseInfo
     */
    public function setPremiumMin($PremiumMin)
    {
        $this->PremiumMin = $PremiumMin;

        return $this;
    }

    /**
     * @return float
     */
    public function getPremiumMax()
    {
        return $this->PremiumMax;
    }

    /**
     * @param float $PremiumMax
     * @return BannerPhraseInfo
     */
    public function setPremiumMax($PremiumMax)
    {
        $this->PremiumMax = $PremiumMax;

        return $this;
    }

    /**
     * @return float
     */
    public function getCTR()
    {
        return $this->CTR;
    }

    /**
     * @param float $CTR
     * @return BannerPhraseInfo
     */
    public function setCTR($CTR)
    {
        $this->CTR = $CTR;

        return $this;
    }

    /**
     * @return float
     */
    public function getFirstPlaceCTR()
    {
        return $this->FirstPlaceCTR;
    }

    /**
     * @param float $FirstPlaceCTR
     * @return BannerPhraseInfo
     */
    public function setFirstPlaceCTR($FirstPlaceCTR)
    {
        $this->FirstPlaceCTR = $FirstPlaceCTR;

        return $this;
    }

    /**
     * @return float
     */
    public function getPremiumCTR()
    {
        return $this->PremiumCTR;
    }

    /**
     * @param float $PremiumCTR
     * @return BannerPhraseInfo
     */
    public function setPremiumCTR($PremiumCTR)
    {
        $this->PremiumCTR = $PremiumCTR;

        return $this;
    }

    /**
     * @return string
     */
    public function getLowCTRWarning()
    {
        return $this->LowCTRWarning;
    }

    /**
     * @param string $LowCTRWarning
     * @return BannerPhraseInfo
     */
    public function setLowCTRWarning($LowCTRWarning)
    {
        $this->LowCTRWarning = $LowCTRWarning;

        return $this;
    }

    /**
     * @return string
     */
    public function getLowCTR()
    {
        return $this->LowCTR;
    }

    /**
     * @param string $LowCTR
     * @return BannerPhraseInfo
     */
    public function setLowCTR($LowCTR)
    {
        $this->LowCTR = $LowCTR;

        return $this;
    }

    /**
     * @return float
     */
    public function getContextPrice()
    {
        return $this->ContextPrice;
    }

    /**
     * @param float $ContextPrice
     * @return BannerPhraseInfo
     */
    public function setContextPrice($ContextPrice)
    {
        $this->ContextPrice = $ContextPrice;

        return $this;
    }

    /**
     * @return CoverageInfo[]
     */
    public function getContextCoverage()
    {
        return $this->ContextCoverage;
    }

    /**
     * @param CoverageInfo[] $ContextCoverage
     * @return BannerPhraseInfo
     */
    public function setContextCoverage(array $ContextCoverage)
    {
        $this->ContextCoverage = $ContextCoverage;

        return $this;
    }

    /**
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * @param int $BannerID
     * @return BannerPhraseInfo
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return BannerPhraseInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }

    /**
     * @return float[]
     */
    public function getPrices()
    {
        return $this->Prices;
    }

    /**
     * @param float[] $Prices
     * @return BannerPhraseInfo
     */
    public function setPrices(array $Prices)
    {
        $this->Prices = $Prices;

        return $this;
    }

    /**
     * @return CoverageInfo[]
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }

    /**
     * @param CoverageInfo[] $Coverage
     * @return BannerPhraseInfo
     */
    public function setCoverage(array $Coverage)
    {
        $this->Coverage = $Coverage;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoBroker()
    {
        return $this->AutoBroker;
    }

    /**
     * @param string $AutoBroker
     * @return BannerPhraseInfo
     */
    public function setAutoBroker($AutoBroker)
    {
        $this->AutoBroker = $AutoBroker;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * @param int $PhraseID
     * @return BannerPhraseInfo
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * @return float
     */
    public function getCurrentOnSearch()
    {
        return $this->CurrentOnSearch;
    }

    /**
     * @param float $CurrentOnSearch
     * @return BannerPhraseInfo
     */
    public function setCurrentOnSearch($CurrentOnSearch)
    {
        $this->CurrentOnSearch = $CurrentOnSearch;

        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return BannerPhraseInfo
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * @param float $MinPrice
     * @return BannerPhraseInfo
     */
    public function setMinPrice($MinPrice)
    {
        $this->MinPrice = $MinPrice;

        return $this;
    }

    /**
     * @return string
     */
    public function getAutoBudgetPriority()
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * @param string $AutoBudgetPriority
     * @return BannerPhraseInfo
     */
    public function setAutoBudgetPriority($AutoBudgetPriority)
    {
        $this->AutoBudgetPriority = $AutoBudgetPriority;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusPhraseModerate()
    {
        return $this->StatusPhraseModerate;
    }

    /**
     * @param string $StatusPhraseModerate
     * @return BannerPhraseInfo
     */
    public function setStatusPhraseModerate($StatusPhraseModerate)
    {
        $this->StatusPhraseModerate = $StatusPhraseModerate;

        return $this;
    }

    /**
     * @return string
     */
    public function getContextLowCTR()
    {
        return $this->ContextLowCTR;
    }

    /**
     * @param string $ContextLowCTR
     * @return BannerPhraseInfo
     */
    public function setContextLowCTR($ContextLowCTR)
    {
        $this->ContextLowCTR = $ContextLowCTR;

        return $this;
    }

    /**
     * @return PhraseUserParams
     */
    public function getUserParams()
    {
        return $this->UserParams;
    }

    /**
     * @param PhraseUserParams $UserParams
     * @return BannerPhraseInfo
     */
    public function setUserParams(PhraseUserParams $UserParams)
    {
        $this->UserParams = $UserParams;

        return $this;
    }
}