<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class NewReportFilterInfo
{
    /**
     * @var string
     */
    protected $PageType;
    /**
     * @var string
     */
    protected $PositionType;
    /**
     * @var int[]
     */
    protected $Banner;
    /**
     * @var int[]
     */
    protected $Geo;
    /**
     * @var string[]
     */
    protected $Phrase;
    /**
     * @var string[]
     */
    protected $PageName;
    /**
     * @var int[]
     */
    protected $StatGoals;

    /**
     * @return string
     */
    public function getPageType()
    {
        return $this->PageType;
    }

    /**
     * @param string $PageType
     * @return NewReportFilterInfo
     */
    public function setPageType($PageType)
    {
        $this->PageType = $PageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPositionType()
    {
        return $this->PositionType;
    }

    /**
     * @param string $PositionType
     * @return NewReportFilterInfo
     */
    public function setPositionType($PositionType)
    {
        $this->PositionType = $PositionType;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getBanner()
    {
        return $this->Banner;
    }

    /**
     * @param int[] $Banner
     * @return NewReportFilterInfo
     */
    public function setBanner(array $Banner)
    {
        $this->Banner = $Banner;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * @param int[] $Geo
     * @return NewReportFilterInfo
     */
    public function setGeo(array $Geo)
    {
        $this->Geo = $Geo;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * @param string[] $Phrase
     * @return NewReportFilterInfo
     */
    public function setPhrase(array $Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPageName()
    {
        return $this->PageName;
    }

    /**
     * @param string[] $PageName
     * @return NewReportFilterInfo
     */
    public function setPageName(array $PageName)
    {
        $this->PageName = $PageName;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getStatGoals()
    {
        return $this->StatGoals;
    }

    /**
     * @param int[] $StatGoals
     * @return NewReportFilterInfo
     */
    public function setStatGoals(array $StatGoals)
    {
        $this->StatGoals = $StatGoals;

        return $this;
    }
}