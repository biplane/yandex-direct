<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdAddItem extends AdAddItemBase
{

    protected $TextAd = null;

    protected $MobileAppAd = null;

    /**
     * Creates a new instance of AdAddItem.
     *
     * @return AdAddItem
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
     * @return $this
     */
    public function setTextAd(TextAdAdd $value = null)
    {
        $this->TextAd = $value;

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
     * @return $this
     */
    public function setMobileAppAd(MobileAppAdAdd $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }


}

