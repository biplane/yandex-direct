<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckDictionariesRequest
{
//    Can be omitted.
//    protected $Timestamp = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTimestamp(): ?string
    {
        return $this->Timestamp ?? null;
    }

    /**
     * @return $this
     */
    public function setTimestamp(?string $value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
