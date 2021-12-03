<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class PlacementTypeArray
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
     * @return PlacementType[]
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * @param PlacementType[] $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }
}
