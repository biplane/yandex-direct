<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
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
     * Creates a new instance of NewReportFilterInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets PageType.
     */
    public function getPageType(): ?string
    {
        return $this->PageType;
    }

    /**
     * Sets PageType.
     *
     * @return $this
     */
    public function setPageType(?string $value = null)
    {
        $this->PageType = $value;

        return $this;
    }

    /**
     * Gets PositionType.
     */
    public function getPositionType(): ?string
    {
        return $this->PositionType;
    }

    /**
     * Sets PositionType.
     *
     * @return $this
     */
    public function setPositionType(?string $value = null)
    {
        $this->PositionType = $value;

        return $this;
    }

    /**
     * Gets Banner.
     *
     * @return int[]|null
     */
    public function getBanner(): ?array
    {
        return $this->Banner;
    }

    /**
     * Sets Banner.
     *
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
     * Gets Geo.
     *
     * @return int[]|null
     */
    public function getGeo(): ?array
    {
        return $this->Geo;
    }

    /**
     * Sets Geo.
     *
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
     * Gets Phrase.
     *
     * @return string[]|null
     */
    public function getPhrase(): ?array
    {
        return $this->Phrase;
    }

    /**
     * Sets Phrase.
     *
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
     * Gets PageName.
     *
     * @return string[]|null
     */
    public function getPageName(): ?array
    {
        return $this->PageName;
    }

    /**
     * Sets PageName.
     *
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
     * Gets StatGoals.
     *
     * @return int[]|null
     */
    public function getStatGoals(): ?array
    {
        return $this->StatGoals;
    }

    /**
     * Sets StatGoals.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setStatGoals(?array $value = null)
    {
        $this->StatGoals = $value;

        return $this;
    }

    /**
     * Gets WithImage.
     */
    public function getWithImage(): ?string
    {
        return $this->WithImage;
    }

    /**
     * Sets WithImage.
     *
     * @return $this
     */
    public function setWithImage(?string $value = null)
    {
        $this->WithImage = $value;

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
     * Gets Age.
     *
     * @return string[]|null
     */
    public function getAge(): ?array
    {
        return $this->Age;
    }

    /**
     * Sets Age.
     *
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
     * Gets Gender.
     *
     * @return string[]|null
     */
    public function getGender(): ?array
    {
        return $this->Gender;
    }

    /**
     * Sets Gender.
     *
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
     * Gets CarrierType.
     *
     * @return string[]|null
     */
    public function getCarrierType(): ?array
    {
        return $this->CarrierType;
    }

    /**
     * Sets CarrierType.
     *
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
     * Gets MobilePlatform.
     *
     * @return string[]|null
     */
    public function getMobilePlatform(): ?array
    {
        return $this->MobilePlatform;
    }

    /**
     * Sets MobilePlatform.
     *
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
