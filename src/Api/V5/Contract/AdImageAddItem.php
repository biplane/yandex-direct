<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageAddItem
{
    protected $ImageData = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImageAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ImageData.
     */
    public function getImageData(): string
    {
        return $this->ImageData;
    }

    /**
     * Sets ImageData.
     *
     * @return $this
     */
    public function setImageData(string $value)
    {
        $this->ImageData = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
