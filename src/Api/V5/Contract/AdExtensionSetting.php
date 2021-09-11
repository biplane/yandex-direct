<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionSetting
{
    protected $AdExtensions = [];

    /**
     * Creates a new instance of AdExtensionSetting.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionSettingItem[]
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionSettingItem[] $value
     *
     * @return $this
     */
    public function setAdExtensions(array $value)
    {
        $this->AdExtensions = $value;

        return $this;
    }
}
