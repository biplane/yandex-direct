<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdUpdateItem
{
    protected $Id = null;

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
//    protected $MobileAppCpcVideoAdBuilderAd = null;

//    Can be omit.
//    protected $TextAdBuilderAd = null;

//    Can be omit.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omit.
//    protected $CpcVideoAdBuilderAd = null;

//    Can be omit.
//    protected $CpmBannerAdBuilderAd = null;

//    Can be omit.
//    protected $CpmVideoAdBuilderAd = null;

//    Can be omit.
//    protected $SmartAdBuilderAd = null;

    /**
     * Creates a new instance of AdUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets TextAd.
     */
    public function getTextAd(): ?TextAdUpdate
    {
        return $this->TextAd ?? null;
    }

    /**
     * Sets TextAd.
     *
     * @return $this
     */
    public function setTextAd(?TextAdUpdate $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAd.
     */
    public function getDynamicTextAd(): ?DynamicTextAdUpdate
    {
        return $this->DynamicTextAd ?? null;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @return $this
     */
    public function setDynamicTextAd(?DynamicTextAdUpdate $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAd.
     */
    public function getMobileAppAd(): ?MobileAppAdUpdate
    {
        return $this->MobileAppAd ?? null;
    }

    /**
     * Sets MobileAppAd.
     *
     * @return $this
     */
    public function setMobileAppAd(?MobileAppAdUpdate $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Gets TextImageAd.
     */
    public function getTextImageAd(): ?TextImageAdUpdate
    {
        return $this->TextImageAd ?? null;
    }

    /**
     * Sets TextImageAd.
     *
     * @return $this
     */
    public function setTextImageAd(?TextImageAdUpdate $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAd.
     */
    public function getMobileAppImageAd(): ?MobileAppImageAdUpdate
    {
        return $this->MobileAppImageAd ?? null;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @return $this
     */
    public function setMobileAppImageAd(?MobileAppImageAdUpdate $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppCpcVideoAdBuilderAd.
     */
    public function getMobileAppCpcVideoAdBuilderAd(): ?MobileAppCpcVideoAdBuilderAdUpdate
    {
        return $this->MobileAppCpcVideoAdBuilderAd ?? null;
    }

    /**
     * Sets MobileAppCpcVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(?MobileAppCpcVideoAdBuilderAdUpdate $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAd.
     */
    public function getTextAdBuilderAd(): ?TextAdBuilderAdUpdate
    {
        return $this->TextAdBuilderAd ?? null;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @return $this
     */
    public function setTextAdBuilderAd(?TextAdBuilderAdUpdate $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAd.
     */
    public function getMobileAppAdBuilderAd(): ?MobileAppAdBuilderAdUpdate
    {
        return $this->MobileAppAdBuilderAd ?? null;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @return $this
     */
    public function setMobileAppAdBuilderAd(?MobileAppAdBuilderAdUpdate $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpcVideoAdBuilderAd.
     */
    public function getCpcVideoAdBuilderAd(): ?CpcVideoAdBuilderAdUpdate
    {
        return $this->CpcVideoAdBuilderAd ?? null;
    }

    /**
     * Sets CpcVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(?CpcVideoAdBuilderAdUpdate $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmBannerAdBuilderAd.
     */
    public function getCpmBannerAdBuilderAd(): ?CpmBannerAdBuilderAdUpdate
    {
        return $this->CpmBannerAdBuilderAd ?? null;
    }

    /**
     * Sets CpmBannerAdBuilderAd.
     *
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(?CpmBannerAdBuilderAdUpdate $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmVideoAdBuilderAd.
     */
    public function getCpmVideoAdBuilderAd(): ?CpmVideoAdBuilderAdUpdate
    {
        return $this->CpmVideoAdBuilderAd ?? null;
    }

    /**
     * Sets CpmVideoAdBuilderAd.
     *
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(?CpmVideoAdBuilderAdUpdate $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets SmartAdBuilderAd.
     */
    public function getSmartAdBuilderAd(): ?SmartAdBuilderAdUpdate
    {
        return $this->SmartAdBuilderAd ?? null;
    }

    /**
     * Sets SmartAdBuilderAd.
     *
     * @return $this
     */
    public function setSmartAdBuilderAd(?SmartAdBuilderAdUpdate $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }
}
