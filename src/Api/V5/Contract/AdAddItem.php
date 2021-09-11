<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdAddItem extends AdAddItemBase
{
//    Can be omit.
//    protected $TextAd = null;

//    Can be omit.
//    protected $DynamicTextAd = null;

//    Can be omit.
//    protected $MobileAppAd = null;

//    Can be omit.
//    protected $TextImageAd = null;

//    Can be omit.
//    protected $MobileAppImageAd = null;

//    Can be omit.
//    protected $TextAdBuilderAd = null;

//    Can be omit.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omit.
//    protected $MobileAppCpcVideoAdBuilderAd = null;

//    Can be omit.
//    protected $CpmBannerAdBuilderAd = null;

//    Can be omit.
//    protected $CpcVideoAdBuilderAd = null;

//    Can be omit.
//    protected $CpmVideoAdBuilderAd = null;

//    Can be omit.
//    protected $SmartAdBuilderAd = null;

    /**
     * Creates a new instance of AdAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TextAd.
     */
    public function getTextAd(): ?TextAdAdd
    {
        return $this->TextAd ?? null;
    }

    /**
     * Sets TextAd.
     *
     * @return $this
     */
    public function setTextAd(?TextAdAdd $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAd.
     */
    public function getDynamicTextAd(): ?DynamicTextAdAdd
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdAdd $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAd.
     */
    public function getMobileAppAd(): ?MobileAppAdAdd
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * Sets MobileAppAd.
     *
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdAdd $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Gets TextImageAd.
     */
    public function getTextImageAd(): ?TextImageAdAdd
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * Sets TextImageAd.
     *
     * @return $this
     */
    public function setTextImageAd(?TextImageAdAdd $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAd.
     */
    public function getMobileAppImageAd(): ?MobileAppImageAdAdd
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdAdd $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAd.
     */
    public function getTextAdBuilderAd(): ?TextAdBuilderAdAdd
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdAdd $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAd.
     */
    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdAdd
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdAdd $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppCpcVideoAdBuilderAd.
     */
    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdAdd
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * Sets MobileAppCpcVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdAdd $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmBannerAdBuilderAd.
     */
    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdAdd
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * Sets CpmBannerAdBuilderAd.
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdAdd $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpcVideoAdBuilderAd.
     */
    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdAdd
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * Sets CpcVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdAdd $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmVideoAdBuilderAd.
     */
    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdAdd
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * Sets CpmVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdAdd $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets SmartAdBuilderAd.
     */
    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdAdd
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * Sets SmartAdBuilderAd.
     *
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdAdd $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }
}
