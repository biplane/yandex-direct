<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageHashesCriteria
{
    protected $AdImageHashes = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]
     */
    public function getAdImageHashes(): array
    {
        return $this->AdImageHashes;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }
}
