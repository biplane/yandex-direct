<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class BannersStatItem
{
    protected $Sum = null;

    protected $SumContext = null;

    protected $SumSearch = null;

    protected $Clicks = null;

    protected $ClicksContext = null;

    protected $ClicksSearch = null;

    protected $Shows = null;

    protected $ShowsContext = null;

    protected $ShowsSearch = null;

    protected $StatDate = null;

    protected $BannerID = null;

    protected $PhraseID = null;

    protected $RubricID = null;

    protected $RetargetingID = null;

    protected $WebpageID = null;

    protected $Phrase = null;

    protected $StatType = null;

    protected $DeviceType = null;

    protected $ShowsAveragePosition = null;

    protected $ClicksAveragePosition = null;

    protected $Revenue = null;

    protected $ROI = null;

    /**
     * Creates a new instance of BannersStatItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Sum.
     */
    public function getSum(): ?float
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @return $this
     */
    public function setSum(?float $value = null)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets SumContext.
     */
    public function getSumContext(): ?float
    {
        return $this->SumContext;
    }

    /**
     * Sets SumContext.
     *
     * @return $this
     */
    public function setSumContext(?float $value = null)
    {
        $this->SumContext = $value;

        return $this;
    }

    /**
     * Gets SumSearch.
     */
    public function getSumSearch(): ?float
    {
        return $this->SumSearch;
    }

    /**
     * Sets SumSearch.
     *
     * @return $this
     */
    public function setSumSearch(?float $value = null)
    {
        $this->SumSearch = $value;

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
     * Gets ClicksContext.
     */
    public function getClicksContext(): ?int
    {
        return $this->ClicksContext;
    }

    /**
     * Sets ClicksContext.
     *
     * @return $this
     */
    public function setClicksContext(?int $value = null)
    {
        $this->ClicksContext = $value;

        return $this;
    }

    /**
     * Gets ClicksSearch.
     */
    public function getClicksSearch(): ?int
    {
        return $this->ClicksSearch;
    }

    /**
     * Sets ClicksSearch.
     *
     * @return $this
     */
    public function setClicksSearch(?int $value = null)
    {
        $this->ClicksSearch = $value;

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
     * Gets ShowsContext.
     */
    public function getShowsContext(): ?int
    {
        return $this->ShowsContext;
    }

    /**
     * Sets ShowsContext.
     *
     * @return $this
     */
    public function setShowsContext(?int $value = null)
    {
        $this->ShowsContext = $value;

        return $this;
    }

    /**
     * Gets ShowsSearch.
     */
    public function getShowsSearch(): ?int
    {
        return $this->ShowsSearch;
    }

    /**
     * Sets ShowsSearch.
     *
     * @return $this
     */
    public function setShowsSearch(?int $value = null)
    {
        $this->ShowsSearch = $value;

        return $this;
    }

    /**
     * Gets StatDate.
     */
    public function getStatDate(): ?string
    {
        return $this->StatDate;
    }

    /**
     * Sets StatDate.
     *
     * @return $this
     */
    public function setStatDate(?string $value = null)
    {
        $this->StatDate = $value;

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
     * Gets PhraseID.
     */
    public function getPhraseID(): ?int
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @return $this
     */
    public function setPhraseID(?int $value = null)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets RubricID.
     */
    public function getRubricID(): ?int
    {
        return $this->RubricID;
    }

    /**
     * Sets RubricID.
     *
     * @return $this
     */
    public function setRubricID(?int $value = null)
    {
        $this->RubricID = $value;

        return $this;
    }

    /**
     * Gets RetargetingID.
     */
    public function getRetargetingID(): ?int
    {
        return $this->RetargetingID;
    }

    /**
     * Sets RetargetingID.
     *
     * @return $this
     */
    public function setRetargetingID(?int $value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }

    /**
     * Gets WebpageID.
     */
    public function getWebpageID(): ?int
    {
        return $this->WebpageID;
    }

    /**
     * Sets WebpageID.
     *
     * @return $this
     */
    public function setWebpageID(?int $value = null)
    {
        $this->WebpageID = $value;

        return $this;
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
     * Gets StatType.
     */
    public function getStatType(): ?string
    {
        return $this->StatType;
    }

    /**
     * Sets StatType.
     *
     * @return $this
     */
    public function setStatType(?string $value = null)
    {
        $this->StatType = $value;

        return $this;
    }

    /**
     * Gets DeviceType.
     */
    public function getDeviceType(): ?string
    {
        return $this->DeviceType;
    }

    /**
     * Sets DeviceType.
     *
     * @return $this
     */
    public function setDeviceType(?string $value = null)
    {
        $this->DeviceType = $value;

        return $this;
    }

    /**
     * Gets ShowsAveragePosition.
     */
    public function getShowsAveragePosition(): ?float
    {
        return $this->ShowsAveragePosition;
    }

    /**
     * Sets ShowsAveragePosition.
     *
     * @return $this
     */
    public function setShowsAveragePosition(?float $value = null)
    {
        $this->ShowsAveragePosition = $value;

        return $this;
    }

    /**
     * Gets ClicksAveragePosition.
     */
    public function getClicksAveragePosition(): ?float
    {
        return $this->ClicksAveragePosition;
    }

    /**
     * Sets ClicksAveragePosition.
     *
     * @return $this
     */
    public function setClicksAveragePosition(?float $value = null)
    {
        $this->ClicksAveragePosition = $value;

        return $this;
    }

    /**
     * Gets Revenue.
     */
    public function getRevenue(): ?float
    {
        return $this->Revenue;
    }

    /**
     * Sets Revenue.
     *
     * @return $this
     */
    public function setRevenue(?float $value = null)
    {
        $this->Revenue = $value;

        return $this;
    }

    /**
     * Gets ROI.
     */
    public function getROI(): ?float
    {
        return $this->ROI;
    }

    /**
     * Sets ROI.
     *
     * @return $this
     */
    public function setROI(?float $value = null)
    {
        $this->ROI = $value;

        return $this;
    }
}
