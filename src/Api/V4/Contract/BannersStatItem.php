<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSum(): ?float
    {
        return $this->Sum;
    }

    /**
     * @return $this
     */
    public function setSum(?float $value = null)
    {
        $this->Sum = $value;

        return $this;
    }

    public function getSumContext(): ?float
    {
        return $this->SumContext;
    }

    /**
     * @return $this
     */
    public function setSumContext(?float $value = null)
    {
        $this->SumContext = $value;

        return $this;
    }

    public function getSumSearch(): ?float
    {
        return $this->SumSearch;
    }

    /**
     * @return $this
     */
    public function setSumSearch(?float $value = null)
    {
        $this->SumSearch = $value;

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

    public function getClicksContext(): ?int
    {
        return $this->ClicksContext;
    }

    /**
     * @return $this
     */
    public function setClicksContext(?int $value = null)
    {
        $this->ClicksContext = $value;

        return $this;
    }

    public function getClicksSearch(): ?int
    {
        return $this->ClicksSearch;
    }

    /**
     * @return $this
     */
    public function setClicksSearch(?int $value = null)
    {
        $this->ClicksSearch = $value;

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

    public function getShowsContext(): ?int
    {
        return $this->ShowsContext;
    }

    /**
     * @return $this
     */
    public function setShowsContext(?int $value = null)
    {
        $this->ShowsContext = $value;

        return $this;
    }

    public function getShowsSearch(): ?int
    {
        return $this->ShowsSearch;
    }

    /**
     * @return $this
     */
    public function setShowsSearch(?int $value = null)
    {
        $this->ShowsSearch = $value;

        return $this;
    }

    public function getStatDate(): ?string
    {
        return $this->StatDate;
    }

    /**
     * @return $this
     */
    public function setStatDate(?string $value = null)
    {
        $this->StatDate = $value;

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

    public function getPhraseID(): ?int
    {
        return $this->PhraseID;
    }

    /**
     * @return $this
     */
    public function setPhraseID(?int $value = null)
    {
        $this->PhraseID = $value;

        return $this;
    }

    public function getRubricID(): ?int
    {
        return $this->RubricID;
    }

    /**
     * @return $this
     */
    public function setRubricID(?int $value = null)
    {
        $this->RubricID = $value;

        return $this;
    }

    public function getRetargetingID(): ?int
    {
        return $this->RetargetingID;
    }

    /**
     * @return $this
     */
    public function setRetargetingID(?int $value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }

    public function getWebpageID(): ?int
    {
        return $this->WebpageID;
    }

    /**
     * @return $this
     */
    public function setWebpageID(?int $value = null)
    {
        $this->WebpageID = $value;

        return $this;
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

    public function getStatType(): ?string
    {
        return $this->StatType;
    }

    /**
     * @return $this
     */
    public function setStatType(?string $value = null)
    {
        $this->StatType = $value;

        return $this;
    }

    public function getDeviceType(): ?string
    {
        return $this->DeviceType;
    }

    /**
     * @return $this
     */
    public function setDeviceType(?string $value = null)
    {
        $this->DeviceType = $value;

        return $this;
    }

    public function getShowsAveragePosition(): ?float
    {
        return $this->ShowsAveragePosition;
    }

    /**
     * @return $this
     */
    public function setShowsAveragePosition(?float $value = null)
    {
        $this->ShowsAveragePosition = $value;

        return $this;
    }

    public function getClicksAveragePosition(): ?float
    {
        return $this->ClicksAveragePosition;
    }

    /**
     * @return $this
     */
    public function setClicksAveragePosition(?float $value = null)
    {
        $this->ClicksAveragePosition = $value;

        return $this;
    }

    public function getRevenue(): ?float
    {
        return $this->Revenue;
    }

    /**
     * @return $this
     */
    public function setRevenue(?float $value = null)
    {
        $this->Revenue = $value;

        return $this;
    }

    public function getROI(): ?float
    {
        return $this->ROI;
    }

    /**
     * @return $this
     */
    public function setROI(?float $value = null)
    {
        $this->ROI = $value;

        return $this;
    }
}
