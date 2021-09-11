<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckDictionariesRequest
{
//    Can be omit.
//    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckDictionariesRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): ?string
    {
        return $this->Timestamp ?? null;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(?string $value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
