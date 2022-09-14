<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtensionSetting
{
    protected $AdExtensions = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdExtensionSettingItem[]
     */
    public function getAdExtensions(): array
    {
        return $this->AdExtensions;
    }

    /**
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
