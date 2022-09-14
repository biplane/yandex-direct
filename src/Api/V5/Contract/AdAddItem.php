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
//    protected $TextAdBuilderAd = null;

//    Can be omitted.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omitted.
//    protected $MobileAppCpcVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $CpmBannerAdBuilderAd = null;

//    Can be omitted.
//    protected $CpcVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $CpmVideoAdBuilderAd = null;

//    Can be omitted.
//    protected $SmartAdBuilderAd = null;

    public function getTextAd(): ?TextAdAdd
    {
        return $this->TextAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAd(?TextAdAdd $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    public function getDynamicTextAd(): ?DynamicTextAdAdd
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdAdd $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    public function getMobileAppAd(): ?MobileAppAdAdd
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdAdd $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    public function getTextImageAd(): ?TextImageAdAdd
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextImageAd(?TextImageAdAdd $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    public function getMobileAppImageAd(): ?MobileAppImageAdAdd
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdAdd $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    public function getTextAdBuilderAd(): ?TextAdBuilderAdAdd
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdAdd $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdAdd
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdAdd $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdAdd
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdAdd $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdAdd
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdAdd $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdAdd
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdAdd $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdAdd
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdAdd $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdAdd
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdAdd $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }
}
