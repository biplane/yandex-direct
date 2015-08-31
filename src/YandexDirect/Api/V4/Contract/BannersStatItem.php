<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class BannersStatItem
{
    /**
     * @var float
     */
    protected $Sum;
    /**
     * @var float
     */
    protected $SumContext;
    /**
     * @var float
     */
    protected $SumSearch;
    /**
     * @var int
     */
    protected $Clicks;
    /**
     * @var int
     */
    protected $ClicksContext;
    /**
     * @var int
     */
    protected $ClicksSearch;
    /**
     * @var int
     */
    protected $Shows;
    /**
     * @var int
     */
    protected $ShowsContext;
    /**
     * @var int
     */
    protected $ShowsSearch;
    /**
     * @var string
     */
    protected $StatDate;
    /**
     * @var int
     */
    protected $BannerID;
    /**
     * @var int
     */
    protected $PhraseID;
    /**
     * @var int
     */
    protected $RubricID;
    /**
     * @var int
     */
    protected $RetargetingID;
    /**
     * @var string
     */
    protected $Phrase;
    /**
     * @var string
     */
    protected $StatType;
    /**
     * @var string
     */
    protected $DeviceType;
    /**
     * @var float
     */
    protected $ShowsAveragePosition;
    /**
     * @var float
     */
    protected $ClicksAveragePosition;

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
     * Gets the Sum.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets the Sum.
     *
     * @param float $Sum
     *
     * @return BannersStatItem
     */
    public function setSum($Sum)
    {
        $this->Sum = $Sum;

        return $this;
    }

    /**
     * Gets the SumContext.
     *
     * @return float
     */
    public function getSumContext()
    {
        return $this->SumContext;
    }

    /**
     * Sets the SumContext.
     *
     * @param float $SumContext
     *
     * @return BannersStatItem
     */
    public function setSumContext($SumContext)
    {
        $this->SumContext = $SumContext;

        return $this;
    }

    /**
     * Gets the SumSearch.
     *
     * @return float
     */
    public function getSumSearch()
    {
        return $this->SumSearch;
    }

    /**
     * Sets the SumSearch.
     *
     * @param float $SumSearch
     *
     * @return BannersStatItem
     */
    public function setSumSearch($SumSearch)
    {
        $this->SumSearch = $SumSearch;

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
     * @return BannersStatItem
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * Gets the ClicksContext.
     *
     * @return int
     */
    public function getClicksContext()
    {
        return $this->ClicksContext;
    }

    /**
     * Sets the ClicksContext.
     *
     * @param int $ClicksContext
     *
     * @return BannersStatItem
     */
    public function setClicksContext($ClicksContext)
    {
        $this->ClicksContext = $ClicksContext;

        return $this;
    }

    /**
     * Gets the ClicksSearch.
     *
     * @return int
     */
    public function getClicksSearch()
    {
        return $this->ClicksSearch;
    }

    /**
     * Sets the ClicksSearch.
     *
     * @param int $ClicksSearch
     *
     * @return BannersStatItem
     */
    public function setClicksSearch($ClicksSearch)
    {
        $this->ClicksSearch = $ClicksSearch;

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
     * @return BannersStatItem
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * Gets the ShowsContext.
     *
     * @return int
     */
    public function getShowsContext()
    {
        return $this->ShowsContext;
    }

    /**
     * Sets the ShowsContext.
     *
     * @param int $ShowsContext
     *
     * @return BannersStatItem
     */
    public function setShowsContext($ShowsContext)
    {
        $this->ShowsContext = $ShowsContext;

        return $this;
    }

    /**
     * Gets the ShowsSearch.
     *
     * @return int
     */
    public function getShowsSearch()
    {
        return $this->ShowsSearch;
    }

    /**
     * Sets the ShowsSearch.
     *
     * @param int $ShowsSearch
     *
     * @return BannersStatItem
     */
    public function setShowsSearch($ShowsSearch)
    {
        $this->ShowsSearch = $ShowsSearch;

        return $this;
    }

    /**
     * Gets the StatDate.
     *
     * @return string
     */
    public function getStatDate()
    {
        return $this->StatDate;
    }

    /**
     * Sets the StatDate.
     *
     * @param string $StatDate
     *
     * @return BannersStatItem
     */
    public function setStatDate($StatDate)
    {
        $this->StatDate = $StatDate;

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
     * @return BannersStatItem
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

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
     * @return BannersStatItem
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * Gets the RubricID.
     *
     * @return int
     */
    public function getRubricID()
    {
        return $this->RubricID;
    }

    /**
     * Sets the RubricID.
     *
     * @param int $RubricID
     *
     * @return BannersStatItem
     */
    public function setRubricID($RubricID)
    {
        $this->RubricID = $RubricID;

        return $this;
    }

    /**
     * Gets the RetargetingID.
     *
     * @return int
     */
    public function getRetargetingID()
    {
        return $this->RetargetingID;
    }

    /**
     * Sets the RetargetingID.
     *
     * @param int $RetargetingID
     *
     * @return BannersStatItem
     */
    public function setRetargetingID($RetargetingID)
    {
        $this->RetargetingID = $RetargetingID;

        return $this;
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
     * @return BannersStatItem
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * Gets the StatType.
     *
     * @return string
     */
    public function getStatType()
    {
        return $this->StatType;
    }

    /**
     * Sets the StatType.
     *
     * @param string $StatType
     *
     * @return BannersStatItem
     */
    public function setStatType($StatType)
    {
        $this->StatType = $StatType;

        return $this;
    }

    /**
     * Gets the DeviceType.
     *
     * @return string
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * Sets the DeviceType.
     *
     * @param string $DeviceType
     *
     * @return BannersStatItem
     */
    public function setDeviceType($DeviceType)
    {
        $this->DeviceType = $DeviceType;

        return $this;
    }

    /**
     * Gets the ShowsAveragePosition.
     *
     * @return float
     */
    public function getShowsAveragePosition()
    {
        return $this->ShowsAveragePosition;
    }

    /**
     * Sets the ShowsAveragePosition.
     *
     * @param float $ShowsAveragePosition
     *
     * @return BannersStatItem
     */
    public function setShowsAveragePosition($ShowsAveragePosition)
    {
        $this->ShowsAveragePosition = $ShowsAveragePosition;

        return $this;
    }

    /**
     * Gets the ClicksAveragePosition.
     *
     * @return float
     */
    public function getClicksAveragePosition()
    {
        return $this->ClicksAveragePosition;
    }

    /**
     * Sets the ClicksAveragePosition.
     *
     * @param float $ClicksAveragePosition
     *
     * @return BannersStatItem
     */
    public function setClicksAveragePosition($ClicksAveragePosition)
    {
        $this->ClicksAveragePosition = $ClicksAveragePosition;

        return $this;
    }
}