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
//    protected $Texts;

//    Can be omitted.
//    protected $Titles;

//    Can be omitted.
//    protected $AdImages;

//    Can be omitted.
//    protected $VideoExtensions;

//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $DisplayDomain;

//    Can be omitted.
//    protected $DisplayUrlPath;

//    Can be omitted.
//    protected $DisplayUrlPathModeration;

//    Can be omitted.
//    protected $PriceExtension;

//    Can be omitted.
//    protected $BusinessId;

//    Can be omitted.
//    protected $ErirAdDescription;

//    Can be omitted.
//    protected $SitelinkSetId;

//    Can be omitted.
//    protected $SitelinksModeration;

//    Can be omitted.
//    protected $AdExtensions;

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
     * Get Texts
     *
     * @return list<TextGetItem>
     */
    public function getTexts(): array
    {
        return $this->Texts ?? [];
    }

    /**
     * Set Texts
     *
     * @param list<TextGetItem> $value
     *
     * @return $this
     */
    public function setTexts(array $value)
    {
        $this->Texts = $value;

        return $this;
    }

    /**
     * Get Titles
     *
     * @return list<TitleGetItem>
     */
    public function getTitles(): array
    {
        return $this->Titles ?? [];
    }

    /**
     * Set Titles
     *
     * @param list<TitleGetItem> $value
     *
     * @return $this
     */
    public function setTitles(array $value)
    {
        $this->Titles = $value;

        return $this;
    }

    /**
     * Get AdImages
     */
    public function getAdImages(): ?ArrayOfAdImageGet
    {
        return $this->AdImages ?? null;
    }

    /**
     * Set AdImages
     *
     * @return $this
     */
    public function setAdImages(?ArrayOfAdImageGet $value)
    {
        $this->AdImages = $value;

        return $this;
    }

    /**
     * Get VideoExtensions
     */
    public function getVideoExtensions(): ?ArrayOfVideoExtensionGet
    {
        return $this->VideoExtensions ?? null;
    }

    /**
     * Set VideoExtensions
     *
     * @return $this
     */
    public function setVideoExtensions(?ArrayOfVideoExtensionGet $value)
    {
        $this->VideoExtensions = $value;

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
     * Get DisplayDomain
     */
    public function getDisplayDomain(): ?string
    {
        return $this->DisplayDomain ?? null;
    }

    /**
     * Set DisplayDomain
     *
     * @return $this
     */
    public function setDisplayDomain(?string $value)
    {
        $this->DisplayDomain = $value;

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
     * Get DisplayUrlPathModeration
     */
    public function getDisplayUrlPathModeration(): ?ExtensionModeration
    {
        return $this->DisplayUrlPathModeration ?? null;
    }

    /**
     * Set DisplayUrlPathModeration
     *
     * @return $this
     */
    public function setDisplayUrlPathModeration(?ExtensionModeration $value)
    {
        $this->DisplayUrlPathModeration = $value;

        return $this;
    }

    /**
     * Get PriceExtension
     */
    public function getPriceExtension(): ?PriceExtensionGetItem
    {
        return $this->PriceExtension ?? null;
    }

    /**
     * Set PriceExtension
     *
     * @return $this
     */
    public function setPriceExtension(?PriceExtensionGetItem $value)
    {
        $this->PriceExtension = $value;

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

    /**
     * Get SitelinkSetId
     */
    public function getSitelinkSetId(): ?int
    {
        return $this->SitelinkSetId ?? null;
    }

    /**
     * Set SitelinkSetId
     *
     * @return $this
     */
    public function setSitelinkSetId(?int $value)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * Get SitelinksModeration
     */
    public function getSitelinksModeration(): ?ExtensionModeration
    {
        return $this->SitelinksModeration ?? null;
    }

    /**
     * Set SitelinksModeration
     *
     * @return $this
     */
    public function setSitelinksModeration(?ExtensionModeration $value)
    {
        $this->SitelinksModeration = $value;

        return $this;
    }

    /**
     * Get AdExtensions
     *
     * @return list<AdExtensionAdGetItem>
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions ?? [];
    }

    /**
     * Set AdExtensions
     *
     * @param list<AdExtensionAdGetItem> $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
