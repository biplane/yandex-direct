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
    protected $Id = null;

//    Can be omitted.
//    protected $TextAd = null;

//    Can be omitted.
//    protected $DynamicTextAd = null;

//    Can be omitted.
//    protected $MobileAppAd = null;

//    Can be omitted.
//    protected $TextImageAd = null;

//    Can be omitted.
//    protected $MobileAppImageAd = null;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $TextAdBuilderAd = null;

//    Can be omitted.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAd = null;

//    Can be omitted.
//    protected $CpmVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $SmartAdBuilderAd = null;

//    Can be omitted.
//    protected $ShoppingAd = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getTextAd(): ?TextAdUpdate
    {
        return $this->TextAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAd(?TextAdUpdate $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    public function getDynamicTextAd(): ?DynamicTextAdUpdate
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdUpdate $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    public function getMobileAppAd(): ?MobileAppAdUpdate
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdUpdate $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    public function getTextImageAd(): ?TextImageAdUpdate
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextImageAd(?TextImageAdUpdate $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    public function getMobileAppImageAd(): ?MobileAppImageAdUpdate
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdUpdate $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdUpdate
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdUpdate $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    public function getTextAdBuilderAd(): ?TextAdBuilderAdUpdate
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdUpdate $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdUpdate
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdUpdate $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdUpdate
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdUpdate $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdUpdate
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdUpdate $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdUpdate
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdUpdate $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdUpdate
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdUpdate $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }

    public function getShoppingAd(): ?ShoppingAdUpdate
    {
        return $this->ShoppingAd ?? null;
    }

    /**
     * @return $this
     */
    public function setShoppingAd(?ShoppingAdUpdate $value = null)
    {
        $this->ShoppingAd = $value;

        return $this;
    }
}
