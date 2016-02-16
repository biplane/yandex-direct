<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignSetting
{

    protected $Option = null;

    protected $Value = null;

    /**
     * Creates a new instance of DynamicTextCampaignSetting.
     *
     * @return DynamicTextCampaignSetting
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Option.
     *
     * @return DynamicTextCampaignSettingsEnum
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Sets Option.
     *
     * @param DynamicTextCampaignSettingsEnum $value
     * @return $this
     */
    public function setOption(DynamicTextCampaignSettingsEnum $value)
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
    public function setValue(YesNoEnum $value)
    {
        $this->Value = $value;

        return $this;
    }


}

