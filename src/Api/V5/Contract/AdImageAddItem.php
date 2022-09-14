<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAddItem
{
    protected $ImageData = null;

    protected $Name = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getImageData(): string
    {
        return $this->ImageData;
    }

    /**
     * @return $this
     */
    public function setImageData(string $value)
    {
        $this->ImageData = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
