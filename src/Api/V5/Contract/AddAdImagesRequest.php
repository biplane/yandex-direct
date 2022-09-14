<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddAdImagesRequest
{
    protected $AdImages = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdImageAddItem[]
     */
    public function getAdImages(): array
    {
        return $this->AdImages;
    }

    /**
     * @param AdImageAddItem[] $value
     *
     * @return $this
     */
    public function setAdImages(array $value)
    {
        $this->AdImages = $value;

        return $this;
    }
}
