<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdUpdateItem
{
    /** @var int */
    protected $Id;

//    Can be omitted.
//    protected $TextAd;

//    Can be omitted.
//    protected $ResponsiveAd;

//    Can be omitted.
//    protected $DynamicTextAd;

//    Can be omitted.
//    protected $MobileAppAd;

//    Can be omitted.
//    protected $TextImageAd;

//    Can be omitted.
//    protected $MobileAppImageAd;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAd;

//    Can be omitted.
//    protected $TextAdBuilderAd;

//    Can be omitted.
//    protected $MobileAppAdBuilderAd;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAd;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAd;

//    Can be omitted.
//    protected $CpmVideoAdBuilderAd;

//    Can be omitted.
//    protected $SmartAdBuilderAd;

//    Can be omitted.
//    protected $ShoppingAd;

//    Can be omitted.
//    protected $ListingAd;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get TextAd
     */
    public function getTextAd(): ?TextAdUpdate
    {
        return $this->TextAd ?? null;
    }

    /**
     * Set TextAd
     *
     * @return $this
     */
    public function setTextAd(?TextAdUpdate $value)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Get ResponsiveAd
     */
    public function getResponsiveAd(): ?ResponsiveAdUpdate
    {
        return $this->ResponsiveAd ?? null;
    }

    /**
     * Set ResponsiveAd
     *
     * @return $this
     */
    public function setResponsiveAd(?ResponsiveAdUpdate $value)
    {
        $this->ResponsiveAd = $value;

        return $this;
    }

    /**
     * Get DynamicTextAd
     */
    public function getDynamicTextAd(): ?DynamicTextAdUpdate
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * Set DynamicTextAd
     *
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdUpdate $value)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Get MobileAppAd
     */
    public function getMobileAppAd(): ?MobileAppAdUpdate
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * Set MobileAppAd
     *
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdUpdate $value)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Get TextImageAd
     */
    public function getTextImageAd(): ?TextImageAdUpdate
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * Set TextImageAd
     *
     * @return $this
     */
    public function setTextImageAd(?TextImageAdUpdate $value)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Get MobileAppImageAd
     */
    public function getMobileAppImageAd(): ?MobileAppImageAdUpdate
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * Set MobileAppImageAd
     *
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdUpdate $value)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Get MobileAppCpcVideoAdBuilderAd
     */
    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdUpdate
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * Set MobileAppCpcVideoAdBuilderAd
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdUpdate $value)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get TextAdBuilderAd
     */
    public function getTextAdBuilderAd(): ?TextAdBuilderAdUpdate
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * Set TextAdBuilderAd
     *
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdUpdate $value)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get MobileAppAdBuilderAd
     */
    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdUpdate
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * Set MobileAppAdBuilderAd
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdUpdate $value)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpcVideoAdBuilderAd
     */
    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdUpdate
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * Set CpcVideoAdBuilderAd
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdUpdate $value)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpmBannerAdBuilderAd
     */
    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdUpdate
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * Set CpmBannerAdBuilderAd
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdUpdate $value)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpmVideoAdBuilderAd
     */
    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdUpdate
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * Set CpmVideoAdBuilderAd
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdUpdate $value)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get SmartAdBuilderAd
     */
    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdUpdate
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * Set SmartAdBuilderAd
     *
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdUpdate $value)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get ShoppingAd
     */
    public function getShoppingAd(): ?ShoppingAdUpdate
    {
        return $this->ShoppingAd ?? null;
    }

    /**
     * Set ShoppingAd
     *
     * @return $this
     */
    public function setShoppingAd(?ShoppingAdUpdate $value)
    {
        $this->ShoppingAd = $value;

        return $this;
    }

    /**
     * Get ListingAd
     */
    public function getListingAd(): ?ListingAdUpdate
    {
        return $this->ListingAd ?? null;
    }

    /**
     * Set ListingAd
     *
     * @return $this
     */
    public function setListingAd(?ListingAdUpdate $value)
    {
        $this->ListingAd = $value;

        return $this;
    }
}
