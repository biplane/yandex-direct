<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FileFeedGet
{
//    Can be omit.
//    protected $Filename = null;

    /**
     * Creates a new instance of FileFeedGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Filename.
     */
    public function getFilename(): ?string
    {
        return $this->Filename ?? null;
    }

    /**
     * Sets Filename.
     *
     * @return $this
     */
    public function setFilename(?string $value = null)
    {
        $this->Filename = $value;

        return $this;
    }
}
