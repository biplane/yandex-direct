<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FileFeedGet
{
//    Can be omitted.
//    protected $Filename;

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
     * Get Filename
     */
    public function getFilename(): ?string
    {
        return $this->Filename ?? null;
    }

    /**
     * Set Filename
     *
     * @return $this
     */
    public function setFilename(?string $value)
    {
        $this->Filename = $value;

        return $this;
    }
}
