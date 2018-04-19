<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionSetting
{

    protected $AdExtensions = [];

    /**
     * Creates a new instance of AdExtensionSetting.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionSettingItem[]
     */
    public function getAdExtensions()
    {
        return $this->AdExtensions;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionSettingItem[] $value
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }


}

