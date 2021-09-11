<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Phrase.
     */
    public function getPhrase(): ?string
    {
        return $this->Phrase;
    }

    /**
     * Sets Phrase.
     *
     * @return $this
     */
    public function setPhrase(?string $value = null)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Gets IsRubric.
     */
    public function getIsRubric(): ?string
    {
        return $this->IsRubric;
    }

    /**
     * Sets IsRubric.
     *
     * @return $this
     */
    public function setIsRubric(?string $value = null)
    {
        $this->IsRubric = $value;

        return $this;
    }

    /**
     * Gets Clicks.
     */
    public function getClicks(): ?int
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @return $this
     */
    public function setClicks(?int $value = null)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets FirstPlaceClicks.
     */
    public function getFirstPlaceClicks(): ?int
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Sets FirstPlaceClicks.
     *
     * @return $this
     */
    public function setFirstPlaceClicks(?int $value = null)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    /**
     * Gets PremiumClicks.
     */
    public function getPremiumClicks(): ?int
    {
        return $this->PremiumClicks;
    }

    /**
     * Sets PremiumClicks.
     *
     * @return $this
     */
    public function setPremiumClicks(?int $value = null)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    /**
     * Gets Shows.
     */
    public function getShows(): ?int
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @return $this
     */
    public function setShows(?int $value = null)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets Min.
     */
    public function getMin(): ?float
    {
        return $this->Min;
    }

    /**
     * Sets Min.
     *
     * @return $this
     */
    public function setMin(?float $value = null)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Gets Max.
     */
    public function getMax(): ?float
    {
        return $this->Max;
    }

    /**
     * Sets Max.
     *
     * @return $this
     */
    public function setMax(?float $value = null)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Gets PremiumMin.
     */
    public function getPremiumMin(): ?float
    {
        return $this->PremiumMin;
    }

    /**
     * Sets PremiumMin.
     *
     * @return $this
     */
    public function setPremiumMin(?float $value = null)
    {
        $this->PremiumMin = $value;

        return $this;
    }

    /**
     * Gets PremiumMax.
     */
    public function getPremiumMax(): ?float
    {
        return $this->PremiumMax;
    }

    /**
     * Sets PremiumMax.
     *
     * @return $this
     */
    public function setPremiumMax(?float $value = null)
    {
        $this->PremiumMax = $value;

        return $this;
    }

    /**
     * Gets CTR.
     */
    public function getCTR(): ?float
    {
        return $this->CTR;
    }

    /**
     * Sets CTR.
     *
     * @return $this
     */
    public function setCTR(?float $value = null)
    {
        $this->CTR = $value;

        return $this;
    }

    /**
     * Gets FirstPlaceCTR.
     */
    public function getFirstPlaceCTR(): ?float
    {
        return $this->FirstPlaceCTR;
    }

    /**
     * Sets FirstPlaceCTR.
     *
     * @return $this
     */
    public function setFirstPlaceCTR(?float $value = null)
    {
        $this->FirstPlaceCTR = $value;

        return $this;
    }

    /**
     * Gets PremiumCTR.
     */
    public function getPremiumCTR(): ?float
    {
        return $this->PremiumCTR;
    }

    /**
     * Sets PremiumCTR.
     *
     * @return $this
     */
    public function setPremiumCTR(?float $value = null)
    {
        $this->PremiumCTR = $value;

        return $this;
    }

    /**
     * Gets LowCTRWarning.
     */
    public function getLowCTRWarning(): ?string
    {
        return $this->LowCTRWarning;
    }

    /**
     * Sets LowCTRWarning.
     *
     * @return $this
     */
    public function setLowCTRWarning(?string $value = null)
    {
        $this->LowCTRWarning = $value;

        return $this;
    }

    /**
     * Gets LowCTR.
     */
    public function getLowCTR(): ?string
    {
        return $this->LowCTR;
    }

    /**
     * Sets LowCTR.
     *
     * @return $this
     */
    public function setLowCTR(?string $value = null)
    {
        $this->LowCTR = $value;

        return $this;
    }

    /**
     * Gets ContextPrice.
     */
    public function getContextPrice(): ?float
    {
        return $this->ContextPrice;
    }

    /**
     * Sets ContextPrice.
     *
     * @return $this
     */
    public function setContextPrice(?float $value = null)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    /**
     * Gets ContextCoverage.
     *
     * @return CoverageInfo[]|null
     */
    public function getContextCoverage(): ?array
    {
        return $this->ContextCoverage;
    }

    /**
     * Sets ContextCoverage.
     *
     * @param CoverageInfo[]|null $value
     *
     * @return $this
     */
    public function setContextCoverage(?array $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Gets BannerID.
     */
    public function getBannerID(): ?int
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @return $this
     */
    public function setBannerID(?int $value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets Price.
     */
    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(?float $value = null)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * Gets Prices.
     *
     * @return float[]|null
     */
    public function getPrices(): ?array
    {
        return $this->Prices;
    }

    /**
     * Sets Prices.
     *
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setPrices(?array $value = null)
    {
        $this->Prices = $value;

        return $this;
    }

    /**
     * Gets Coverage.
     *
     * @return CoverageInfo[]|null
     */
    public function getCoverage(): ?array
    {
        return $this->Coverage;
    }

    /**
     * Sets Coverage.
     *
     * @param CoverageInfo[]|null $value
     *
     * @return $this
     */
    public function setCoverage(?array $value = null)
    {
        $this->Coverage = $value;

        return $this;
    }

    /**
     * Gets AutoBroker.
     */
    public function getAutoBroker(): ?string
    {
        return $this->AutoBroker;
    }

    /**
     * Sets AutoBroker.
     *
     * @return $this
     */
    public function setAutoBroker(?string $value = null)
    {
        $this->AutoBroker = $value;

        return $this;
    }

    /**
     * Gets PhraseID.
     */
    public function getPhraseID(): int
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @return $this
     */
    public function setPhraseID(int $value)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets CurrentOnSearch.
     */
    public function getCurrentOnSearch(): ?float
    {
        return $this->CurrentOnSearch;
    }

    /**
     * Sets CurrentOnSearch.
     *
     * @return $this
     */
    public function setCurrentOnSearch(?float $value = null)
    {
        $this->CurrentOnSearch = $value;

        return $this;
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets MinPrice.
     */
    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }

    /**
     * Sets MinPrice.
     *
     * @return $this
     */
    public function setMinPrice(?float $value = null)
    {
        $this->MinPrice = $value;

        return $this;
    }

    /**
     * Gets AutoBudgetPriority.
     */
    public function getAutoBudgetPriority(): ?string
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * Sets AutoBudgetPriority.
     *
     * @return $this
     */
    public function setAutoBudgetPriority(?string $value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    /**
     * Gets StatusPhraseModerate.
     */
    public function getStatusPhraseModerate(): ?string
    {
        return $this->StatusPhraseModerate;
    }

    /**
     * Sets StatusPhraseModerate.
     *
     * @return $this
     */
    public function setStatusPhraseModerate(?string $value = null)
    {
        $this->StatusPhraseModerate = $value;

        return $this;
    }

    /**
     * Gets ContextLowCTR.
     */
    public function getContextLowCTR(): ?string
    {
        return $this->ContextLowCTR;
    }

    /**
     * Sets ContextLowCTR.
     *
     * @return $this
     */
    public function setContextLowCTR(?string $value = null)
    {
        $this->ContextLowCTR = $value;

        return $this;
    }

    /**
     * Gets UserParams.
     */
    public function getUserParams(): ?PhraseUserParams
    {
        return $this->UserParams;
    }

    /**
     * Sets UserParams.
     *
     * @return $this
     */
    public function setUserParams(?PhraseUserParams $value = null)
    {
        $this->UserParams = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     *
     * @return PhraseAuctionBids[]|null
     */
    public function getAuctionBids(): ?array
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @param PhraseAuctionBids[]|null $value
     *
     * @return $this
     */
    public function setAuctionBids(?array $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }

    /**
     * Gets AdGroupID.
     */
    public function getAdGroupID(): ?int
    {
        return $this->AdGroupID;
    }

    /**
     * Sets AdGroupID.
     *
     * @return $this
     */
    public function setAdGroupID(?int $value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    /**
     * Gets StatusPaused.
     */
    public function getStatusPaused(): ?string
    {
        return $this->StatusPaused;
    }

    /**
     * Sets StatusPaused.
     *
     * @return $this
     */
    public function setStatusPaused(?string $value = null)
    {
        $this->StatusPaused = $value;

        return $this;
    }

    /**
     * Gets ContextClicks.
     */
    public function getContextClicks(): ?int
    {
        return $this->ContextClicks;
    }

    /**
     * Sets ContextClicks.
     *
     * @return $this
     */
    public function setContextClicks(?int $value = null)
    {
        $this->ContextClicks = $value;

        return $this;
    }

    /**
     * Gets ContextShows.
     */
    public function getContextShows(): ?int
    {
        return $this->ContextShows;
    }

    /**
     * Sets ContextShows.
     *
     * @return $this
     */
    public function setContextShows(?int $value = null)
    {
        $this->ContextShows = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
