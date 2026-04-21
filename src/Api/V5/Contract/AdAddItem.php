<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdAddItem extends AdAddItemBase
{
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
//    protected $TextAdBuilderAd;

//    Can be omitted.
//    protected $MobileAppAdBuilderAd;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAd;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAd;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAd;

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
    public static function create()
    {
        return new static();
    }

    /**
     * Get TextAd
     */
    public function getTextAd(): ?TextAdAdd
    {
        return $this->TextAd ?? null;
    }

    /**
     * Set TextAd
     *
     * @return $this
     */
    public function setTextAd(?TextAdAdd $value)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Get ResponsiveAd
     */
    public function getResponsiveAd(): ?ResponsiveAdAdd
    {
        return $this->ResponsiveAd ?? null;
    }

    /**
     * Set ResponsiveAd
     *
     * @return $this
     */
    public function setResponsiveAd(?ResponsiveAdAdd $value)
    {
        $this->ResponsiveAd = $value;

        return $this;
    }

    /**
     * Get DynamicTextAd
     */
    public function getDynamicTextAd(): ?DynamicTextAdAdd
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * Set DynamicTextAd
     *
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdAdd $value)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Get MobileAppAd
     */
    public function getMobileAppAd(): ?MobileAppAdAdd
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * Set MobileAppAd
     *
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdAdd $value)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Get TextImageAd
     */
    public function getTextImageAd(): ?TextImageAdAdd
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * Set TextImageAd
     *
     * @return $this
     */
    public function setTextImageAd(?TextImageAdAdd $value)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Get MobileAppImageAd
     */
    public function getMobileAppImageAd(): ?MobileAppImageAdAdd
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * Set MobileAppImageAd
     *
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdAdd $value)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Get TextAdBuilderAd
     */
    public function getTextAdBuilderAd(): ?TextAdBuilderAdAdd
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * Set TextAdBuilderAd
     *
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdAdd $value)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get MobileAppAdBuilderAd
     */
    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdAdd
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * Set MobileAppAdBuilderAd
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdAdd $value)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get MobileAppCpcVideoAdBuilderAd
     */
    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdAdd
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * Set MobileAppCpcVideoAdBuilderAd
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdAdd $value)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpmBannerAdBuilderAd
     */
    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdAdd
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * Set CpmBannerAdBuilderAd
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdAdd $value)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpcVideoAdBuilderAd
     */
    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdAdd
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * Set CpcVideoAdBuilderAd
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdAdd $value)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get CpmVideoAdBuilderAd
     */
    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdAdd
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * Set CpmVideoAdBuilderAd
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdAdd $value)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get SmartAdBuilderAd
     */
    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdAdd
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * Set SmartAdBuilderAd
     *
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdAdd $value)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }

    /**
     * Get ShoppingAd
     */
    public function getShoppingAd(): ?ShoppingAdAdd
    {
        return $this->ShoppingAd ?? null;
    }

    /**
     * Set ShoppingAd
     *
     * @return $this
     */
    public function setShoppingAd(?ShoppingAdAdd $value)
    {
        $this->ShoppingAd = $value;

        return $this;
    }

    /**
     * Get ListingAd
     */
    public function getListingAd(): ?ListingAdAdd
    {
        return $this->ListingAd ?? null;
    }

    /**
     * Set ListingAd
     *
     * @return $this
     */
    public function setListingAd(?ListingAdAdd $value)
    {
        $this->ListingAd = $value;

        return $this;
    }
}
