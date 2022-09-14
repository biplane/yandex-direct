<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ImageAdAddBase
{
    protected $AdImageHash = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdImageHash(): string
    {
        return $this->AdImageHash;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }
}
