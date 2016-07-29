<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignSettingGet
{

    protected $Option = null;

    protected $Value = null;

    /**
     * Creates a new instance of MobileAppCampaignSettingGet.
     *
     * @return MobileAppCampaignSettingGet
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Option.
     *
     * @return MobileAppCampaignSettingsGetEnum
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Sets Option.
     *
     * @param MobileAppCampaignSettingsGetEnum $value
     * @return $this
     */
    public function setOption($value)
    {
        $this->Option = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @return YesNoEnum
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param YesNoEnum $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

