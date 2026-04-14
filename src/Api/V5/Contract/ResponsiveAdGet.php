<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ResponsiveAdGet
{
//    Can be omitted.
//    protected $Texts = null;

//    Can be omitted.
//    protected $Titles = null;

//    Can be omitted.
//    protected $AdImages = null;

//    Can be omitted.
//    protected $VideoExtensions = null;

//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $DisplayDomain = null;

//    Can be omitted.
//    protected $DisplayUrlPath = null;

//    Can be omitted.
//    protected $DisplayUrlPathModeration = null;

//    Can be omitted.
//    protected $PriceExtension = null;

//    Can be omitted.
//    protected $BusinessId = null;

//    Can be omitted.
//    protected $ErirAdDescription = null;

//    Can be omitted.
//    protected $SitelinkSetId = null;

//    Can be omitted.
//    protected $SitelinksModeration = null;

//    Can be omitted.
//    protected $AdExtensions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return TextGetItem[]|null
     */
    public function getTexts(): ?array
    {
        return $this->Texts ?? null;
    }

    /**
     * @param TextGetItem[]|null $value
     *
     * @return $this
     */
    public function setTexts(?array $value = null)
    {
        $this->Texts = $value;

        return $this;
    }

    /**
     * @return TitleGetItem[]|null
     */
    public function getTitles(): ?array
    {
        return $this->Titles ?? null;
    }

    /**
     * @param TitleGetItem[]|null $value
     *
     * @return $this
     */
    public function setTitles(?array $value = null)
    {
        $this->Titles = $value;

        return $this;
    }

    /**
     * @return AdImageGetItemShort[]|null
     */
    public function getAdImages(): ?array
    {
        return $this->AdImages ?? null;
    }

    /**
     * @param AdImageGetItemShort[]|null $value
     *
     * @return $this
     */
    public function setAdImages(?array $value = null)
    {
        $this->AdImages = $value;

        return $this;
    }

    /**
     * @return VideoExtensionWithStatusClarificationGetItem[]|null
     */
    public function getVideoExtensions(): ?array
    {
        return $this->VideoExtensions ?? null;
    }

    /**
     * @param VideoExtensionWithStatusClarificationGetItem[]|null $value
     *
     * @return $this
     */
    public function setVideoExtensions(?array $value = null)
    {
        $this->VideoExtensions = $value;

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

    public function getDisplayDomain(): ?string
    {
        return $this->DisplayDomain ?? null;
    }

    /**
     * @return $this
     */
    public function setDisplayDomain(?string $value = null)
    {
        $this->DisplayDomain = $value;

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

    public function getDisplayUrlPathModeration(): ?ExtensionModeration
    {
        return $this->DisplayUrlPathModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setDisplayUrlPathModeration(?ExtensionModeration $value = null)
    {
        $this->DisplayUrlPathModeration = $value;

        return $this;
    }

    public function getPriceExtension(): ?PriceExtensionGetItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionGetItem $value = null)
    {
        $this->PriceExtension = $value;

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

    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAdDescription(?string $value = null)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }

    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinkSetId(?int $value = null)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value = null)
    {
        $this->SitelinksModeration = $value;

        return $this;
    }

    /**
     * @return AdExtensionAdGetItem[]|null
     */
    public function getAdExtensions(): ?array
    {
        return $this->AdExtensions ?? null;
    }

    /**
     * @param AdExtensionAdGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdExtensions(?array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
