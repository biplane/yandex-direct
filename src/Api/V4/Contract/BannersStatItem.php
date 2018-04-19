<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Sum.
     *
     * @return float|null
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSum($value = null)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets SumContext.
     *
     * @return float|null
     */
    public function getSumContext()
    {
        return $this->SumContext;
    }

    /**
     * Sets SumContext.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSumContext($value = null)
    {
        $this->SumContext = $value;

        return $this;
    }

    /**
     * Gets SumSearch.
     *
     * @return float|null
     */
    public function getSumSearch()
    {
        return $this->SumSearch;
    }

    /**
     * Sets SumSearch.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSumSearch($value = null)
    {
        $this->SumSearch = $value;

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
     * @return $this
     */
    public function setClicks($value = null)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets ClicksContext.
     *
     * @return int|null
     */
    public function getClicksContext()
    {
        return $this->ClicksContext;
    }

    /**
     * Sets ClicksContext.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClicksContext($value = null)
    {
        $this->ClicksContext = $value;

        return $this;
    }

    /**
     * Gets ClicksSearch.
     *
     * @return int|null
     */
    public function getClicksSearch()
    {
        return $this->ClicksSearch;
    }

    /**
     * Sets ClicksSearch.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClicksSearch($value = null)
    {
        $this->ClicksSearch = $value;

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
     * @return $this
     */
    public function setShows($value = null)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets ShowsContext.
     *
     * @return int|null
     */
    public function getShowsContext()
    {
        return $this->ShowsContext;
    }

    /**
     * Sets ShowsContext.
     *
     * @param int|null $value
     * @return $this
     */
    public function setShowsContext($value = null)
    {
        $this->ShowsContext = $value;

        return $this;
    }

    /**
     * Gets ShowsSearch.
     *
     * @return int|null
     */
    public function getShowsSearch()
    {
        return $this->ShowsSearch;
    }

    /**
     * Sets ShowsSearch.
     *
     * @param int|null $value
     * @return $this
     */
    public function setShowsSearch($value = null)
    {
        $this->ShowsSearch = $value;

        return $this;
    }

    /**
     * Gets StatDate.
     *
     * @return string|null
     */
    public function getStatDate()
    {
        return $this->StatDate;
    }

    /**
     * Sets StatDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatDate($value = null)
    {
        $this->StatDate = $value;

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
     * @return $this
     */
    public function setBannerID($value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets PhraseID.
     *
     * @return int|null
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setPhraseID($value = null)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets RubricID.
     *
     * @return int|null
     */
    public function getRubricID()
    {
        return $this->RubricID;
    }

    /**
     * Sets RubricID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setRubricID($value = null)
    {
        $this->RubricID = $value;

        return $this;
    }

    /**
     * Gets RetargetingID.
     *
     * @return int|null
     */
    public function getRetargetingID()
    {
        return $this->RetargetingID;
    }

    /**
     * Sets RetargetingID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setRetargetingID($value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }

    /**
     * Gets WebpageID.
     *
     * @return int|null
     */
    public function getWebpageID()
    {
        return $this->WebpageID;
    }

    /**
     * Sets WebpageID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWebpageID($value = null)
    {
        $this->WebpageID = $value;

        return $this;
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
     * @return $this
     */
    public function setPhrase($value = null)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Gets StatType.
     *
     * @return string|null
     */
    public function getStatType()
    {
        return $this->StatType;
    }

    /**
     * Sets StatType.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatType($value = null)
    {
        $this->StatType = $value;

        return $this;
    }

    /**
     * Gets DeviceType.
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * Sets DeviceType.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDeviceType($value = null)
    {
        $this->DeviceType = $value;

        return $this;
    }

    /**
     * Gets ShowsAveragePosition.
     *
     * @return float|null
     */
    public function getShowsAveragePosition()
    {
        return $this->ShowsAveragePosition;
    }

    /**
     * Sets ShowsAveragePosition.
     *
     * @param float|null $value
     * @return $this
     */
    public function setShowsAveragePosition($value = null)
    {
        $this->ShowsAveragePosition = $value;

        return $this;
    }

    /**
     * Gets ClicksAveragePosition.
     *
     * @return float|null
     */
    public function getClicksAveragePosition()
    {
        return $this->ClicksAveragePosition;
    }

    /**
     * Sets ClicksAveragePosition.
     *
     * @param float|null $value
     * @return $this
     */
    public function setClicksAveragePosition($value = null)
    {
        $this->ClicksAveragePosition = $value;

        return $this;
    }

    /**
     * Gets Revenue.
     *
     * @return float|null
     */
    public function getRevenue()
    {
        return $this->Revenue;
    }

    /**
     * Sets Revenue.
     *
     * @param float|null $value
     * @return $this
     */
    public function setRevenue($value = null)
    {
        $this->Revenue = $value;

        return $this;
    }

    /**
     * Gets ROI.
     *
     * @return float|null
     */
    public function getROI()
    {
        return $this->ROI;
    }

    /**
     * Sets ROI.
     *
     * @param float|null $value
     * @return $this
     */
    public function setROI($value = null)
    {
        $this->ROI = $value;

        return $this;
    }


}

