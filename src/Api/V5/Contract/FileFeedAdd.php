<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FileFeedAdd
{
    /** @var string */
    protected $Data;

    /** @var string */
    protected $Filename;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Data
     */
    public function getData(): string
    {
        return $this->Data;
    }

    /**
     * Set Data
     *
     * @return $this
     */
    public function setData(string $value)
    {
        $this->Data = $value;

        return $this;
    }

    /**
     * Get Filename
     */
    public function getFilename(): string
    {
        return $this->Filename;
    }

    /**
     * Set Filename
     *
     * @return $this
     */
    public function setFilename(string $value)
    {
        $this->Filename = $value;

        return $this;
    }
}
