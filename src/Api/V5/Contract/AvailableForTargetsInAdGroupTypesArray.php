<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AvailableForTargetsInAdGroupTypesArray
{
    protected $Items = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see AdGroupTypesEnum
     *
     * @return string[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * @see AdGroupTypesEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
