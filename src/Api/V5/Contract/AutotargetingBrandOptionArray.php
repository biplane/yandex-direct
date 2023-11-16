<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingBrandOptionArray
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
     * @return AutotargetingBrandOption[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * @param AutotargetingBrandOption[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
