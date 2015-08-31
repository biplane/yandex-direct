<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

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
     * @var string
     */
    protected $WithImage;
    /**
     * @var string
     */
    protected $DeviceType;

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
     * Gets the PageType.
     *
     * @return string
     */
    public function getPageType()
    {
        return $this->PageType;
    }

    /**
     * Sets the PageType.
     *
     * @param string $PageType
     *
     * @return NewReportFilterInfo
     */
    public function setPageType($PageType)
    {
        $this->PageType = $PageType;

        return $this;
    }

    /**
     * Gets the PositionType.
     *
     * @return string
     */
    public function getPositionType()
    {
        return $this->PositionType;
    }

    /**
     * Sets the PositionType.
     *
     * @param string $PositionType
     *
     * @return NewReportFilterInfo
     */
    public function setPositionType($PositionType)
    {
        $this->PositionType = $PositionType;

        return $this;
    }

    /**
     * Gets the Banner.
     *
     * @return int[]
     */
    public function getBanner()
    {
        return $this->Banner;
    }

    /**
     * Sets the Banner.
     *
     * @param int[] $Banner
     *
     * @return NewReportFilterInfo
     */
    public function setBanner(array $Banner)
    {
        $this->Banner = $Banner;

        return $this;
    }

    /**
     * Gets the Geo.
     *
     * @return int[]
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * Sets the Geo.
     *
     * @param int[] $Geo
     *
     * @return NewReportFilterInfo
     */
    public function setGeo(array $Geo)
    {
        $this->Geo = $Geo;

        return $this;
    }

    /**
     * Gets the Phrase.
     *
     * @return string[]
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * Sets the Phrase.
     *
     * @param string[] $Phrase
     *
     * @return NewReportFilterInfo
     */
    public function setPhrase(array $Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * Gets the PageName.
     *
     * @return string[]
     */
    public function getPageName()
    {
        return $this->PageName;
    }

    /**
     * Sets the PageName.
     *
     * @param string[] $PageName
     *
     * @return NewReportFilterInfo
     */
    public function setPageName(array $PageName)
    {
        $this->PageName = $PageName;

        return $this;
    }

    /**
     * Gets the StatGoals.
     *
     * @return int[]
     */
    public function getStatGoals()
    {
        return $this->StatGoals;
    }

    /**
     * Sets the StatGoals.
     *
     * @param int[] $StatGoals
     *
     * @return NewReportFilterInfo
     */
    public function setStatGoals(array $StatGoals)
    {
        $this->StatGoals = $StatGoals;

        return $this;
    }

    /**
     * Gets the WithImage.
     *
     * @return string
     */
    public function getWithImage()
    {
        return $this->WithImage;
    }

    /**
     * Sets the WithImage.
     *
     * @param string $WithImage
     *
     * @return NewReportFilterInfo
     */
    public function setWithImage($WithImage)
    {
        $this->WithImage = $WithImage;

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
     * @return NewReportFilterInfo
     */
    public function setDeviceType($DeviceType)
    {
        $this->DeviceType = $DeviceType;

        return $this;
    }
}