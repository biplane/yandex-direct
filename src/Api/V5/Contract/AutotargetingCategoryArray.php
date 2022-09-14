<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingCategoryArray
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
     * @return AutotargetingCategory[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * @param AutotargetingCategory[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
