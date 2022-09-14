<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdAdd extends TextAdAddBase
{
    protected $Text = null;

    protected $Title = null;

//    Can be omitted.
//    protected $Title2 = null;

//    Can be omitted.
//    protected $Href = null;

    protected $Mobile = null;

//    Can be omitted.
//    protected $DisplayUrlPath = null;

//    Can be omitted.
//    protected $VideoExtension = null;

//    Can be omitted.
//    protected $PriceExtension = null;

//    Can be omitted.
//    protected $TurboPageId = null;

//    Can be omitted.
//    protected $BusinessId = null;

//    Can be omitted.
//    protected $PreferVCardOverBusiness = null;

    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    public function getTitle2(): ?string
    {
        return $this->Title2 ?? null;
    }

    /**
     * @return $this
     */
    public function setTitle2(?string $value = null)
    {
        $this->Title2 = $value;

        return $this;
    }

    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getMobile(): string
    {
        return $this->Mobile;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setMobile(string $value)
    {
        $this->Mobile = $value;

        return $this;
    }

    public function getDisplayUrlPath(): ?string
    {
        return $this->DisplayUrlPath ?? null;
    }

    /**
     * @return $this
     */
    public function setDisplayUrlPath(?string $value = null)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    public function getVideoExtension(): ?VideoExtensionAddItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionAddItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    public function getPriceExtension(): ?PriceExtensionAddItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionAddItem $value = null)
    {
        $this->PriceExtension = $value;

        return $this;
    }

    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * @return $this
     */
    public function setTurboPageId(?int $value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * @return $this
     */
    public function setBusinessId(?int $value = null)
    {
        $this->BusinessId = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getPreferVCardOverBusiness(): ?string
    {
        return $this->PreferVCardOverBusiness ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setPreferVCardOverBusiness(?string $value = null)
    {
        $this->PreferVCardOverBusiness = $value;

        return $this;
    }
}
