<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NewReportFilterInfo
{
    protected $PageType = null;

    protected $PositionType = null;

    protected $Banner = null;

    protected $Geo = null;

    protected $Phrase = null;

    protected $PageName = null;

    protected $StatGoals = null;

    protected $WithImage = null;

    protected $DeviceType = null;

    protected $Age = null;

    protected $Gender = null;

    protected $CarrierType = null;

    protected $MobilePlatform = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPageType(): ?string
    {
        return $this->PageType;
    }

    /**
     * @return $this
     */
    public function setPageType(?string $value = null)
    {
        $this->PageType = $value;

        return $this;
    }

    public function getPositionType(): ?string
    {
        return $this->PositionType;
    }

    /**
     * @return $this
     */
    public function setPositionType(?string $value = null)
    {
        $this->PositionType = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getBanner(): ?array
    {
        return $this->Banner;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setBanner(?array $value = null)
    {
        $this->Banner = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getGeo(): ?array
    {
        return $this->Geo;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setGeo(?array $value = null)
    {
        $this->Geo = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPhrase(): ?array
    {
        return $this->Phrase;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setPhrase(?array $value = null)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPageName(): ?array
    {
        return $this->PageName;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setPageName(?array $value = null)
    {
        $this->PageName = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getStatGoals(): ?array
    {
        return $this->StatGoals;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setStatGoals(?array $value = null)
    {
        $this->StatGoals = $value;

        return $this;
    }

    public function getWithImage(): ?string
    {
        return $this->WithImage;
    }

    /**
     * @return $this
     */
    public function setWithImage(?string $value = null)
    {
        $this->WithImage = $value;

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

    /**
     * @return string[]|null
     */
    public function getAge(): ?array
    {
        return $this->Age;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAge(?array $value = null)
    {
        $this->Age = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getGender(): ?array
    {
        return $this->Gender;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setGender(?array $value = null)
    {
        $this->Gender = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCarrierType(): ?array
    {
        return $this->CarrierType;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCarrierType(?array $value = null)
    {
        $this->CarrierType = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getMobilePlatform(): ?array
    {
        return $this->MobilePlatform;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobilePlatform(?array $value = null)
    {
        $this->MobilePlatform = $value;

        return $this;
    }
}
