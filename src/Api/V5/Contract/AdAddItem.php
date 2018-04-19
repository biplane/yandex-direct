<?php

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

    /**
     * Creates a new instance of AdAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TextAd.
     *
     * @return TextAdAdd|null
     */
    public function getTextAd()
    {
        return isset($this->TextAd) ? $this->TextAd : null;
    }

    /**
     * Sets TextAd.
     *
     * @param TextAdAdd|null $value
     * @return $this
     */
    public function setTextAd(TextAdAdd $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAd.
     *
     * @return DynamicTextAdAdd|null
     */
    public function getDynamicTextAd()
    {
        return isset($this->DynamicTextAd) ? $this->DynamicTextAd : null;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @param DynamicTextAdAdd|null $value
     * @return $this
     */
    public function setDynamicTextAd(DynamicTextAdAdd $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAd.
     *
     * @return MobileAppAdAdd|null
     */
    public function getMobileAppAd()
    {
        return isset($this->MobileAppAd) ? $this->MobileAppAd : null;
    }

    /**
     * Sets MobileAppAd.
     *
     * @param MobileAppAdAdd|null $value
     * @return $this
     */
    public function setMobileAppAd(MobileAppAdAdd $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Gets TextImageAd.
     *
     * @return TextImageAdAdd|null
     */
    public function getTextImageAd()
    {
        return isset($this->TextImageAd) ? $this->TextImageAd : null;
    }

    /**
     * Sets TextImageAd.
     *
     * @param TextImageAdAdd|null $value
     * @return $this
     */
    public function setTextImageAd(TextImageAdAdd $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAd.
     *
     * @return MobileAppImageAdAdd|null
     */
    public function getMobileAppImageAd()
    {
        return isset($this->MobileAppImageAd) ? $this->MobileAppImageAd : null;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @param MobileAppImageAdAdd|null $value
     * @return $this
     */
    public function setMobileAppImageAd(MobileAppImageAdAdd $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAd.
     *
     * @return TextAdBuilderAdAdd|null
     */
    public function getTextAdBuilderAd()
    {
        return isset($this->TextAdBuilderAd) ? $this->TextAdBuilderAd : null;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @param TextAdBuilderAdAdd|null $value
     * @return $this
     */
    public function setTextAdBuilderAd(TextAdBuilderAdAdd $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAd.
     *
     * @return MobileAppAdBuilderAdAdd|null
     */
    public function getMobileAppAdBuilderAd()
    {
        return isset($this->MobileAppAdBuilderAd) ? $this->MobileAppAdBuilderAd : null;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @param MobileAppAdBuilderAdAdd|null $value
     * @return $this
     */
    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdAdd $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }


}

