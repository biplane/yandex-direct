<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdAddItem extends AdAddItemBase
{

    protected $TextAd = null;

    protected $DynamicTextAd = null;

    protected $MobileAppAd = null;

    protected $TextImageAd = null;

    protected $MobileAppImageAd = null;

    protected $TextAdBuilderAd = null;

    protected $MobileAppAdBuilderAd = null;

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
        return $this->TextAd;
    }

    /**
     * Sets TextAd.
     *
     * @param TextAdAdd|null $value
     * @return self
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
        return $this->DynamicTextAd;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @param DynamicTextAdAdd|null $value
     * @return self
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
        return $this->MobileAppAd;
    }

    /**
     * Sets MobileAppAd.
     *
     * @param MobileAppAdAdd|null $value
     * @return self
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
        return $this->TextImageAd;
    }

    /**
     * Sets TextImageAd.
     *
     * @param TextImageAdAdd|null $value
     * @return self
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
        return $this->MobileAppImageAd;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @param MobileAppImageAdAdd|null $value
     * @return self
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
        return $this->TextAdBuilderAd;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @param TextAdBuilderAdAdd|null $value
     * @return self
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
        return $this->MobileAppAdBuilderAd;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @param MobileAppAdBuilderAdAdd|null $value
     * @return self
     */
    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdAdd $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }


}

