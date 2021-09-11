<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TrackingPixelGetArray
{
//    Can be omit.
//    protected $Items = null;

    /**
     * Creates a new instance of TrackingPixelGetArray.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Items.
     *
     * @return TrackingPixelGetItem[]|null
     */
    public function getItems(): ?array
    {
        return $this->Items ?? null;
    }

    /**
     * Sets Items.
     *
     * @param TrackingPixelGetItem[]|null $value
     *
     * @return $this
     */
    public function setItems(?array $value = null)
    {
        $this->Items = $value;

        return $this;
    }
}
