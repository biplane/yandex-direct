<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdUpdate extends TextAdUpdateBase
{
//    Can be omitted.
//    protected $Text;

//    Can be omitted.
//    protected $Title;

//    Can be omitted.
//    protected $Title2;

//    Can be omitted.
//    protected $FinalUrl;

//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $AgeLabel;

//    Can be omitted.
//    protected $DisplayUrlPath;

//    Can be omitted.
//    protected $VideoExtension;

//    Can be omitted.
//    protected $PriceExtension;

//    Can be omitted.
//    protected $TurboPageId;

//    Can be omitted.
//    protected $BusinessId;

//    Can be omitted.
//    protected $PreferVCardOverBusiness;

//    Can be omitted.
//    protected $ErirAdDescription;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Text
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Set Text
     *
     * @return $this
     */
    public function setText(?string $value)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Get Title
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Set Title
     *
     * @return $this
     */
    public function setTitle(?string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Get Title2
     */
    public function getTitle2(): ?string
    {
        return $this->Title2 ?? null;
    }

    /**
     * Set Title2
     *
     * @return $this
     */
    public function setTitle2(?string $value)
    {
        $this->Title2 = $value;

        return $this;
    }

    /**
     * Get FinalUrl
     */
    public function getFinalUrl(): ?string
    {
        return $this->FinalUrl ?? null;
    }

    /**
     * Set FinalUrl
     *
     * @return $this
     */
    public function setFinalUrl(?string $value)
    {
        $this->FinalUrl = $value;

        return $this;
    }

    /**
     * Get Href
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Set Href
     *
     * @return $this
     */
    public function setHref(?string $value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Get AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum
     *
     * @return 'MONTHS_0'|'MONTHS_1'|'MONTHS_2'|'MONTHS_3'|'MONTHS_4'|'MONTHS_5'|'MONTHS_6'|'MONTHS_7'|'MONTHS_8'|'MONTHS_9'|'MONTHS_10'|'MONTHS_11'|'MONTHS_12'|'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null
     */
    public function getAgeLabel(): ?string
    {
        return $this->AgeLabel ?? null;
    }

    /**
     * Set AgeLabel
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum
     *
     * @param 'MONTHS_0'|'MONTHS_1'|'MONTHS_2'|'MONTHS_3'|'MONTHS_4'|'MONTHS_5'|'MONTHS_6'|'MONTHS_7'|'MONTHS_8'|'MONTHS_9'|'MONTHS_10'|'MONTHS_11'|'MONTHS_12'|'AGE_0'|'AGE_6'|'AGE_12'|'AGE_16'|'AGE_18'|null $value
     *
     * @return $this
     */
    public function setAgeLabel(?string $value)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Get DisplayUrlPath
     */
    public function getDisplayUrlPath(): ?string
    {
        return $this->DisplayUrlPath ?? null;
    }

    /**
     * Set DisplayUrlPath
     *
     * @return $this
     */
    public function setDisplayUrlPath(?string $value)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    /**
     * Get VideoExtension
     */
    public function getVideoExtension(): ?VideoExtensionUpdateItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Set VideoExtension
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionUpdateItem $value)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    /**
     * Get PriceExtension
     */
    public function getPriceExtension(): ?PriceExtensionUpdateItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * Set PriceExtension
     *
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionUpdateItem $value)
    {
        $this->PriceExtension = $value;

        return $this;
    }

    /**
     * Get TurboPageId
     */
    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * Set TurboPageId
     *
     * @return $this
     */
    public function setTurboPageId(?int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Get BusinessId
     */
    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * Set BusinessId
     *
     * @return $this
     */
    public function setBusinessId(?int $value)
    {
        $this->BusinessId = $value;

        return $this;
    }

    /**
     * Get PreferVCardOverBusiness
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getPreferVCardOverBusiness(): ?string
    {
        return $this->PreferVCardOverBusiness ?? null;
    }

    /**
     * Set PreferVCardOverBusiness
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setPreferVCardOverBusiness(?string $value)
    {
        $this->PreferVCardOverBusiness = $value;

        return $this;
    }

    /**
     * Get ErirAdDescription
     */
    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * Set ErirAdDescription
     *
     * @return $this
     */
    public function setErirAdDescription(?string $value)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
