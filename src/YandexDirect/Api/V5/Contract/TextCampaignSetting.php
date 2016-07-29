<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignSetting
{

    protected $Option = null;

    protected $Value = null;

    /**
     * Creates a new instance of TextCampaignSetting.
     *
     * @return TextCampaignSetting
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Option.
     *
     * @return TextCampaignSettingsEnum
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * Sets Option.
     *
     * @param TextCampaignSettingsEnum $value
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

