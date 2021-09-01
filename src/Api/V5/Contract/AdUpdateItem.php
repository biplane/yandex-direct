<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets TextAd.
     *
     * @return TextAdUpdate|null
     */
    public function getTextAd()
    {
        return isset($this->TextAd) ? $this->TextAd : null;
    }

    /**
     * Sets TextAd.
     *
     * @param TextAdUpdate|null $value
     * @return $this
     */
    public function setTextAd(TextAdUpdate $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAd.
     *
     * @return DynamicTextAdUpdate|null
     */
    public function getDynamicTextAd()
    {
        return isset($this->DynamicTextAd) ? $this->DynamicTextAd : null;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @param DynamicTextAdUpdate|null $value
     * @return $this
     */
    public function setDynamicTextAd(DynamicTextAdUpdate $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAd.
     *
     * @return MobileAppAdUpdate|null
     */
    public function getMobileAppAd()
    {
        return isset($this->MobileAppAd) ? $this->MobileAppAd : null;
    }

    /**
     * Sets MobileAppAd.
     *
     * @param MobileAppAdUpdate|null $value
     * @return $this
     */
    public function setMobileAppAd(MobileAppAdUpdate $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Gets TextImageAd.
     *
     * @return TextImageAdUpdate|null
     */
    public function getTextImageAd()
    {
        return isset($this->TextImageAd) ? $this->TextImageAd : null;
    }

    /**
     * Sets TextImageAd.
     *
     * @param TextImageAdUpdate|null $value
     * @return $this
     */
    public function setTextImageAd(TextImageAdUpdate $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAd.
     *
     * @return MobileAppImageAdUpdate|null
     */
    public function getMobileAppImageAd()
    {
        return isset($this->MobileAppImageAd) ? $this->MobileAppImageAd : null;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @param MobileAppImageAdUpdate|null $value
     * @return $this
     */
    public function setMobileAppImageAd(MobileAppImageAdUpdate $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppCpcVideoAdBuilderAd.
     *
     * @return MobileAppCpcVideoAdBuilderAdUpdate|null
     */
    public function getMobileAppCpcVideoAdBuilderAd()
    {
        return isset($this->MobileAppCpcVideoAdBuilderAd) ? $this->MobileAppCpcVideoAdBuilderAd : null;
    }

    /**
     * Sets MobileAppCpcVideoAdBuilderAd.
     *
     * @param MobileAppCpcVideoAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setMobileAppCpcVideoAdBuilderAd(MobileAppCpcVideoAdBuilderAdUpdate $value = null)
    {
        $this->MobileAppCpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAd.
     *
     * @return TextAdBuilderAdUpdate|null
     */
    public function getTextAdBuilderAd()
    {
        return isset($this->TextAdBuilderAd) ? $this->TextAdBuilderAd : null;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @param TextAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setTextAdBuilderAd(TextAdBuilderAdUpdate $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAd.
     *
     * @return MobileAppAdBuilderAdUpdate|null
     */
    public function getMobileAppAdBuilderAd()
    {
        return isset($this->MobileAppAdBuilderAd) ? $this->MobileAppAdBuilderAd : null;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @param MobileAppAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdUpdate $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpcVideoAdBuilderAd.
     *
     * @return CpcVideoAdBuilderAdUpdate|null
     */
    public function getCpcVideoAdBuilderAd()
    {
        return isset($this->CpcVideoAdBuilderAd) ? $this->CpcVideoAdBuilderAd : null;
    }

    /**
     * Sets CpcVideoAdBuilderAd.
     *
     * @param CpcVideoAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setCpcVideoAdBuilderAd(CpcVideoAdBuilderAdUpdate $value = null)
    {
        $this->CpcVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmBannerAdBuilderAd.
     *
     * @return CpmBannerAdBuilderAdUpdate|null
     */
    public function getCpmBannerAdBuilderAd()
    {
        return isset($this->CpmBannerAdBuilderAd) ? $this->CpmBannerAdBuilderAd : null;
    }

    /**
     * Sets CpmBannerAdBuilderAd.
     *
     * @param CpmBannerAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(CpmBannerAdBuilderAdUpdate $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmVideoAdBuilderAd.
     *
     * @return CpmVideoAdBuilderAdUpdate|null
     */
    public function getCpmVideoAdBuilderAd()
    {
        return isset($this->CpmVideoAdBuilderAd) ? $this->CpmVideoAdBuilderAd : null;
    }

    /**
     * Sets CpmVideoAdBuilderAd.
     *
     * @param CpmVideoAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setCpmVideoAdBuilderAd(CpmVideoAdBuilderAdUpdate $value = null)
    {
        $this->CpmVideoAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets SmartAdBuilderAd.
     *
     * @return SmartAdBuilderAdUpdate|null
     */
    public function getSmartAdBuilderAd()
    {
        return isset($this->SmartAdBuilderAd) ? $this->SmartAdBuilderAd : null;
    }

    /**
     * Sets SmartAdBuilderAd.
     *
     * @param SmartAdBuilderAdUpdate|null $value
     * @return $this
     */
    public function setSmartAdBuilderAd(SmartAdBuilderAdUpdate $value = null)
    {
        $this->SmartAdBuilderAd = $value;

        return $this;
    }


}

