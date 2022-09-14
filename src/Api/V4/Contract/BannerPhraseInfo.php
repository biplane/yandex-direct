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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPhrase(): ?string
    {
        return $this->Phrase;
    }

    /**
     * @return $this
     */
    public function setPhrase(?string $value = null)
    {
        $this->Phrase = $value;

        return $this;
    }

    public function getIsRubric(): ?string
    {
        return $this->IsRubric;
    }

    /**
     * @return $this
     */
    public function setIsRubric(?string $value = null)
    {
        $this->IsRubric = $value;

        return $this;
    }

    public function getClicks(): ?int
    {
        return $this->Clicks;
    }

    /**
     * @return $this
     */
    public function setClicks(?int $value = null)
    {
        $this->Clicks = $value;

        return $this;
    }

    public function getFirstPlaceClicks(): ?int
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * @return $this
     */
    public function setFirstPlaceClicks(?int $value = null)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    public function getPremiumClicks(): ?int
    {
        return $this->PremiumClicks;
    }

    /**
     * @return $this
     */
    public function setPremiumClicks(?int $value = null)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    public function getShows(): ?int
    {
        return $this->Shows;
    }

    /**
     * @return $this
     */
    public function setShows(?int $value = null)
    {
        $this->Shows = $value;

        return $this;
    }

    public function getMin(): ?float
    {
        return $this->Min;
    }

    /**
     * @return $this
     */
    public function setMin(?float $value = null)
    {
        $this->Min = $value;

        return $this;
    }

    public function getMax(): ?float
    {
        return $this->Max;
    }

    /**
     * @return $this
     */
    public function setMax(?float $value = null)
    {
        $this->Max = $value;

        return $this;
    }

    public function getPremiumMin(): ?float
    {
        return $this->PremiumMin;
    }

    /**
     * @return $this
     */
    public function setPremiumMin(?float $value = null)
    {
        $this->PremiumMin = $value;

        return $this;
    }

    public function getPremiumMax(): ?float
    {
        return $this->PremiumMax;
    }

    /**
     * @return $this
     */
    public function setPremiumMax(?float $value = null)
    {
        $this->PremiumMax = $value;

        return $this;
    }

    public function getCTR(): ?float
    {
        return $this->CTR;
    }

    /**
     * @return $this
     */
    public function setCTR(?float $value = null)
    {
        $this->CTR = $value;

        return $this;
    }

    public function getFirstPlaceCTR(): ?float
    {
        return $this->FirstPlaceCTR;
    }

    /**
     * @return $this
     */
    public function setFirstPlaceCTR(?float $value = null)
    {
        $this->FirstPlaceCTR = $value;

        return $this;
    }

    public function getPremiumCTR(): ?float
    {
        return $this->PremiumCTR;
    }

    /**
     * @return $this
     */
    public function setPremiumCTR(?float $value = null)
    {
        $this->PremiumCTR = $value;

        return $this;
    }

    public function getLowCTRWarning(): ?string
    {
        return $this->LowCTRWarning;
    }

    /**
     * @return $this
     */
    public function setLowCTRWarning(?string $value = null)
    {
        $this->LowCTRWarning = $value;

        return $this;
    }

    public function getLowCTR(): ?string
    {
        return $this->LowCTR;
    }

    /**
     * @return $this
     */
    public function setLowCTR(?string $value = null)
    {
        $this->LowCTR = $value;

        return $this;
    }

    public function getContextPrice(): ?float
    {
        return $this->ContextPrice;
    }

    /**
     * @return $this
     */
    public function setContextPrice(?float $value = null)
    {
        $this->ContextPrice = $value;

        return $this;
    }

    /**
     * @return CoverageInfo[]|null
     */
    public function getContextCoverage(): ?array
    {
        return $this->ContextCoverage;
    }

    /**
     * @param CoverageInfo[]|null $value
     *
     * @return $this
     */
    public function setContextCoverage(?array $value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    public function getBannerID(): ?int
    {
        return $this->BannerID;
    }

    /**
     * @return $this
     */
    public function setBannerID(?int $value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    /**
     * @return $this
     */
    public function setPrice(?float $value = null)
    {
        $this->Price = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getPrices(): ?array
    {
        return $this->Prices;
    }

    /**
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
     * @return CoverageInfo[]|null
     */
    public function getCoverage(): ?array
    {
        return $this->Coverage;
    }

    /**
     * @param CoverageInfo[]|null $value
     *
     * @return $this
     */
    public function setCoverage(?array $value = null)
    {
        $this->Coverage = $value;

        return $this;
    }

    public function getAutoBroker(): ?string
    {
        return $this->AutoBroker;
    }

    /**
     * @return $this
     */
    public function setAutoBroker(?string $value = null)
    {
        $this->AutoBroker = $value;

        return $this;
    }

    public function getPhraseID(): int
    {
        return $this->PhraseID;
    }

    /**
     * @return $this
     */
    public function setPhraseID(int $value)
    {
        $this->PhraseID = $value;

        return $this;
    }

    public function getCurrentOnSearch(): ?float
    {
        return $this->CurrentOnSearch;
    }

    /**
     * @return $this
     */
    public function setCurrentOnSearch(?float $value = null)
    {
        $this->CurrentOnSearch = $value;

        return $this;
    }

    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }

    /**
     * @return $this
     */
    public function setMinPrice(?float $value = null)
    {
        $this->MinPrice = $value;

        return $this;
    }

    public function getAutoBudgetPriority(): ?string
    {
        return $this->AutoBudgetPriority;
    }

    /**
     * @return $this
     */
    public function setAutoBudgetPriority(?string $value = null)
    {
        $this->AutoBudgetPriority = $value;

        return $this;
    }

    public function getStatusPhraseModerate(): ?string
    {
        return $this->StatusPhraseModerate;
    }

    /**
     * @return $this
     */
    public function setStatusPhraseModerate(?string $value = null)
    {
        $this->StatusPhraseModerate = $value;

        return $this;
    }

    public function getContextLowCTR(): ?string
    {
        return $this->ContextLowCTR;
    }

    /**
     * @return $this
     */
    public function setContextLowCTR(?string $value = null)
    {
        $this->ContextLowCTR = $value;

        return $this;
    }

    public function getUserParams(): ?PhraseUserParams
    {
        return $this->UserParams;
    }

    /**
     * @return $this
     */
    public function setUserParams(?PhraseUserParams $value = null)
    {
        $this->UserParams = $value;

        return $this;
    }

    /**
     * @return PhraseAuctionBids[]|null
     */
    public function getAuctionBids(): ?array
    {
        return $this->AuctionBids;
    }

    /**
     * @param PhraseAuctionBids[]|null $value
     *
     * @return $this
     */
    public function setAuctionBids(?array $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }

    public function getAdGroupID(): ?int
    {
        return $this->AdGroupID;
    }

    /**
     * @return $this
     */
    public function setAdGroupID(?int $value = null)
    {
        $this->AdGroupID = $value;

        return $this;
    }

    public function getStatusPaused(): ?string
    {
        return $this->StatusPaused;
    }

    /**
     * @return $this
     */
    public function setStatusPaused(?string $value = null)
    {
        $this->StatusPaused = $value;

        return $this;
    }

    public function getContextClicks(): ?int
    {
        return $this->ContextClicks;
    }

    /**
     * @return $this
     */
    public function setContextClicks(?int $value = null)
    {
        $this->ContextClicks = $value;

        return $this;
    }

    public function getContextShows(): ?int
    {
        return $this->ContextShows;
    }

    /**
     * @return $this
     */
    public function setContextShows(?int $value = null)
    {
        $this->ContextShows = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
