<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BannerPhraseInfo
{
    /** @var string|null */
    protected $Phrase = null;

    /** @var string|null */
    protected $IsRubric = null;

    /** @var int|null */
    protected $Clicks = null;

    /** @var int|null */
    protected $FirstPlaceClicks = null;

    /** @var int|null */
    protected $PremiumClicks = null;

    /** @var int|null */
    protected $Shows = null;

    /** @var float|null */
    protected $Min = null;

    /** @var float|null */
    protected $Max = null;

    /** @var float|null */
    protected $PremiumMin = null;

    /** @var float|null */
    protected $PremiumMax = null;

    /** @var float|null */
    protected $CTR = null;

    /** @var float|null */
    protected $FirstPlaceCTR = null;

    /** @var float|null */
    protected $PremiumCTR = null;

    /** @var string|null */
    protected $LowCTRWarning = null;

    /** @var string|null */
    protected $LowCTR = null;

    /** @var float|null */
    protected $ContextPrice = null;

//    Can be omitted.
//    protected $ContextCoverage;

    /** @var int|null */
    protected $BannerID = null;

    /** @var float|null */
    protected $Price = null;

//    Can be omitted.
//    protected $Prices;

//    Can be omitted.
//    protected $Coverage;

    /** @var string|null */
    protected $AutoBroker = null;

    /** @var int */
    protected $PhraseID;

    /** @var float|null */
    protected $CurrentOnSearch = null;

    /** @var int|null */
    protected $CampaignID = null;

    /** @var float|null */
    protected $MinPrice = null;

    /** @var string|null */
    protected $AutoBudgetPriority = null;

    /** @var string|null */
    protected $StatusPhraseModerate = null;

    /** @var string|null */
    protected $ContextLowCTR = null;

    /** @var PhraseUserParams|null */
    protected $UserParams = null;

//    Can be omitted.
//    protected $AuctionBids;

    /** @var int|null */
    protected $AdGroupID = null;

    /** @var string|null */
    protected $StatusPaused = null;

    /** @var int|null */
    protected $ContextClicks = null;

    /** @var int|null */
    protected $ContextShows = null;

    /** @var string|null */
    protected $Currency = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Phrase
     */
    public function getPhrase(): ?string
    {
        return $this->Phrase;
    }

    /**
     * Set Phrase
     *
     * @return $this
     */
    public function setPhrase(?string $value)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Get IsRubric
     */
    public function getIsRubric(): ?string
    {
        return $this->IsRubric;
    }

    /**
     * Set IsRubric
     *
     * @return $this
     */
    public function setIsRubric(?string $value)
    {
        $this->IsRubric = $value;

        return $this;
    }

    /**
     * Get Clicks
     */
    public function getClicks(): ?int
    {
        return $this->Clicks;
    }

    /**
     * Set Clicks
     *
     * @return $this
     */
    public function setClicks(?int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Get FirstPlaceClicks
     */
    public function getFirstPlaceClicks(): ?int
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Set FirstPlaceClicks
     *
     * @return $this
     */
    public function setFirstPlaceClicks(?int $value)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    /**
     * Get PremiumClicks
     */
    public function getPremiumClicks(): ?int
    {
        return $this->PremiumClicks;
    }

    /**
     * Set PremiumClicks
     *
     * @return $this
     */
    public function setPremiumClicks(?int $value)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    /**
     * Get Shows
     */
    public function getShows(): ?int
    {
        return $this->Shows;
    }

    /**
     * Set Shows
     *
     * @return $this
     */
    public function setShows(?int $value)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Get Min
     */
    public function getMin(): ?float
    {
        return $this->Min;
    }

    /**
     * Set Min
     *
     * @return $this
     */
    public function setMin(?float $value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Get Max
     */
    public function getMax(): ?float
    {
        return $this->Max;
    }

    /**
     * Set Max
     *
     * @return $this
     */
    public function setMax(?float $value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Get PremiumMin
     */
    public function getPremiumMin(): ?float
    {
        return $this->PremiumMin;
    }

    /**
     * Set PremiumMin
     *
     * @return $this
     */
    public function setPremiumMin(?float $value)
    {
        $this->PremiumMin = $value;

        return $this;
    }

    /**
     * Get PremiumMax
     */
    public function getPremiumMax(): ?float
    {
        return $this->PremiumMax;
    }

    /**
     * Set PremiumMax
     *
     * @return $this
     */
    public function setPremiumMax(?float $value)
    {
        $this->PremiumMax = $value;

        return $this;
    }

    /**
     * Get CTR
     */
    public function getCTR(): ?float
    {
        return $this->CTR;
    }

    /**
     * Set CTR
     *
     * @return $this
     */
    public function setCTR(?float $value)
    {
        $this->CTR = $value;

        return $this;
    }

    /**
     * Get FirstPlaceCTR
     */
    public function getFirstPlaceCTR(): ?float
    {
        return $this->FirstPlaceCTR;
    }

    /**
     * Set FirstPlaceCTR
     *
     * @return $this
     */
    public function setFirstPlaceCTR(?float $value)
    {
        $this->FirstPlaceCTR = $value;

        return $this;
    }

    /**
     * Get PremiumCTR
     */
    public function getPremiumCTR(): ?float
    {
        return $this->PremiumCTR;
    }

    /**
     * Set PremiumCTR
     *
     * @return $this
     */
    public function setPremiumCTR(?float $value)
    {
        $this->PremiumCTR = $value;

        return $this;
    }

    /**
     * Get LowCTRWarning
     */
    public function getLowCTRWarning(): ?string
    {
        return $this->LowCTRWarning;
    }

    /**
     * Set LowCTRWarning
     *
     * @return $this
     */
    public function setLowCTRWarning(?string $value)
    {
        $this->LowCTRWarning = $value;

        return $this;
    }

    /**
     * Get LowCTR
     */
    public function getLowCTR(): ?string
    {
        return $this->LowCTR;
    }

    /**
     * Set LowCTR
     *
     * @return $this
     */
    public function setLowCTR(?string $value)
    {
        $this->LowCTR = $value;

        return $this;
    }

    /**
     * Get ContextPrice
     */
    public function getContextPrice(): ?float
    {
        return $this->ContextPrice;
    }

    /**
     * Set ContextPrice
     *
     * @return $this
     */
    public function setContextPrice(?float $value)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    /**
     * Get ContextCoverage
     *
     * @return list<CoverageInfo>|null
     */
    public function getContextCoverage(): ?array
    {
        return $this->ContextCoverage ?? null;
    }

    /**
     * Set ContextCoverage
     *
     * @param list<CoverageInfo>|null $value
     *
     * @return $this
     */
    public function setContextCoverage(?array $value)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Get BannerID
     */
    public function getBannerID(): ?int
    {
        return $this->BannerID;
    }

    /**
     * Set BannerID
     *
     * @return $this
     */
    public function setBannerID(?int $value)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Get Price
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(?float $value)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * Get Prices
     *
     * @return list<float>|null
     */
    public function getPrices(): ?array
    {
        return $this->Prices ?? null;
    }

    /**
     * Set Prices
     *
     * @param list<float>|null $value
     *
     * @return $this
     */
    public function setPrices(?array $value)
    {
        $this->Prices = $value;

        return $this;
    }

    /**
     * Get Coverage
     *
     * @return list<CoverageInfo>|null
     */
    public function getCoverage(): ?array
    {
        return $this->Coverage ?? null;
    }

    /**
     * Set Coverage
     *
     * @param list<CoverageInfo>|null $value
     *
     * @return $this
     */
    public function setCoverage(?array $value)
    {
        $this->Coverage = $value;

        return $this;
    }

    /**
     * Get AutoBroker
     */
    public function getAutoBroker(): ?string
    {
        return $this->AutoBroker;
    }

    /**
     * Set AutoBroker
     *
     * @return $this
     */
    public function setAutoBroker(?string $value)
    {
        $this->AutoBroker = $value;

        return $this;
    }

    /**
     * Get PhraseID
     */
    public function getPhraseID(): int
    {
        return $this->PhraseID;
    }

    /**
     * Set PhraseID
     *
     * @return $this
     */
    public function setPhraseID(int $value)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Get CurrentOnSearch
     */
    public function getCurrentOnSearch(): ?float
    {
        return $this->CurrentOnSearch;
    }

    /**
     * Set CurrentOnSearch
     *
     * @return $this
     */
    public function setCurrentOnSearch(?float $value)
    {
        $this->CurrentOnSearch = $value;

        return $this;
    }

    /**
     * Get CampaignID
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Set CampaignID
     *
     * @return $this
     */
    public function setCampaignID(?int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Get MinPrice
     */
    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }

    /**
     * Set MinPrice
     *
     * @return $this
     */
    public function setMinPrice(?float $value)
    {
        $this->MinPrice = $value;

        return $this;
    }

    /**
     * Get AutoBudgetPriority
     */
    public function getAutoBudgetPriority(): ?string
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Set AutoBudgetPriority
     *
     * @return $this
     */
    public function setAutoBudgetPriority(?string $value)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    /**
     * Get StatusPhraseModerate
     */
    public function getStatusPhraseModerate(): ?string
    {
        return $this->StatusPhraseModerate;
    }

    /**
     * Set StatusPhraseModerate
     *
     * @return $this
     */
    public function setStatusPhraseModerate(?string $value)
    {
        $this->StatusPhraseModerate = $value;

        return $this;
    }

    /**
     * Get ContextLowCTR
     */
    public function getContextLowCTR(): ?string
    {
        return $this->ContextLowCTR;
    }

    /**
     * Set ContextLowCTR
     *
     * @return $this
     */
    public function setContextLowCTR(?string $value)
    {
        $this->ContextLowCTR = $value;

        return $this;
    }

    /**
     * Get UserParams
     */
    public function getUserParams(): ?PhraseUserParams
    {
        return $this->UserParams;
    }

    /**
     * Set UserParams
     *
     * @return $this
     */
    public function setUserParams(?PhraseUserParams $value)
    {
        $this->UserParams = $value;

        return $this;
    }

    /**
     * Get AuctionBids
     *
     * @return list<PhraseAuctionBids>|null
     */
    public function getAuctionBids(): ?array
    {
        return $this->AuctionBids ?? null;
    }

    /**
     * Set AuctionBids
     *
     * @param list<PhraseAuctionBids>|null $value
     *
     * @return $this
     */
    public function setAuctionBids(?array $value)
    {
        $this->AuctionBids = $value;

        return $this;
    }

    /**
     * Get AdGroupID
     */
    public function getAdGroupID(): ?int
    {
        return $this->AdGroupID;
    }

    /**
     * Set AdGroupID
     *
     * @return $this
     */
    public function setAdGroupID(?int $value)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    /**
     * Get StatusPaused
     */
    public function getStatusPaused(): ?string
    {
        return $this->StatusPaused;
    }

    /**
     * Set StatusPaused
     *
     * @return $this
     */
    public function setStatusPaused(?string $value)
    {
        $this->StatusPaused = $value;

        return $this;
    }

    /**
     * Get ContextClicks
     */
    public function getContextClicks(): ?int
    {
        return $this->ContextClicks;
    }

    /**
     * Set ContextClicks
     *
     * @return $this
     */
    public function setContextClicks(?int $value)
    {
        $this->ContextClicks = $value;

        return $this;
    }

    /**
     * Get ContextShows
     */
    public function getContextShows(): ?int
    {
        return $this->ContextShows;
    }

    /**
     * Set ContextShows
     *
     * @return $this
     */
    public function setContextShows(?int $value)
    {
        $this->ContextShows = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }
}
