<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGet extends TextAdGetBase
{
//    Can be omit.
//    protected $Text = null;

//    Can be omit.
//    protected $Title = null;

//    Can be omit.
//    protected $Title2 = null;

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $Mobile = null;

//    Can be omit.
//    protected $DisplayDomain = null;

//    Can be omit.
//    protected $DisplayUrlPath = null;

//    Can be omit.
//    protected $DisplayUrlPathModeration = null;

//    Can be omit.
//    protected $VideoExtension = null;

//    Can be omit.
//    protected $PriceExtension = null;

//    Can be omit.
//    protected $TurboPageId = null;

//    Can be omit.
//    protected $TurboPageModeration = null;

//    Can be omit.
//    protected $BusinessId = null;

//    Can be omit.
//    protected $PreferVCardOverBusiness = null;

    /**
     * Creates a new instance of TextAdGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Text.
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Sets Text.
     *
     * @return $this
     */
    public function setText(?string $value = null)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets Title.
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(?string $value = null)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Title2.
     */
    public function getTitle2(): ?string
    {
        return $this->Title2 ?? null;
    }

    /**
     * Sets Title2.
     *
     * @return $this
     */
    public function setTitle2(?string $value = null)
    {
        $this->Title2 = $value;

        return $this;
    }

    /**
     * Gets Href.
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Sets Href.
     *
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets Mobile.
     *
     * @see YesNoEnum
     */
    public function getMobile(): ?string
    {
        return $this->Mobile ?? null;
    }

    /**
     * Sets Mobile.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setMobile(?string $value = null)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * Gets DisplayDomain.
     */
    public function getDisplayDomain(): ?string
    {
        return $this->DisplayDomain ?? null;
    }

    /**
     * Sets DisplayDomain.
     *
     * @return $this
     */
    public function setDisplayDomain(?string $value = null)
    {
        $this->DisplayDomain = $value;

        return $this;
    }

    /**
     * Gets DisplayUrlPath.
     */
    public function getDisplayUrlPath(): ?string
    {
        return $this->DisplayUrlPath ?? null;
    }

    /**
     * Sets DisplayUrlPath.
     *
     * @return $this
     */
    public function setDisplayUrlPath(?string $value = null)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    /**
     * Gets DisplayUrlPathModeration.
     */
    public function getDisplayUrlPathModeration(): ?ExtensionModeration
    {
        return $this->DisplayUrlPathModeration ?? null;
    }

    /**
     * Sets DisplayUrlPathModeration.
     *
     * @return $this
     */
    public function setDisplayUrlPathModeration(?ExtensionModeration $value = null)
    {
        $this->DisplayUrlPathModeration = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     */
    public function getVideoExtension(): ?VideoExtensionGetItem
    {
        return $this->VideoExtension ?? null;
    }

    /**
     * Sets VideoExtension.
     *
     * @return $this
     */
    public function setVideoExtension(?VideoExtensionGetItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    /**
     * Gets PriceExtension.
     */
    public function getPriceExtension(): ?PriceExtensionGetItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * Sets PriceExtension.
     *
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionGetItem $value = null)
    {
        $this->PriceExtension = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     */
    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * Sets TurboPageId.
     *
     * @return $this
     */
    public function setTurboPageId(?int $value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Gets TurboPageModeration.
     */
    public function getTurboPageModeration(): ?ExtensionModeration
    {
        return $this->TurboPageModeration ?? null;
    }

    /**
     * Sets TurboPageModeration.
     *
     * @return $this
     */
    public function setTurboPageModeration(?ExtensionModeration $value = null)
    {
        $this->TurboPageModeration = $value;

        return $this;
    }

    /**
     * Gets BusinessId.
     */
    public function getBusinessId(): ?int
    {
        return $this->BusinessId ?? null;
    }

    /**
     * Sets BusinessId.
     *
     * @return $this
     */
    public function setBusinessId(?int $value = null)
    {
        $this->BusinessId = $value;

        return $this;
    }

    /**
     * Gets PreferVCardOverBusiness.
     *
     * @see YesNoEnum
     */
    public function getPreferVCardOverBusiness(): ?string
    {
        return $this->PreferVCardOverBusiness ?? null;
    }

    /**
     * Sets PreferVCardOverBusiness.
     *
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
