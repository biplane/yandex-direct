<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdImagesRequest
{
    protected $AdImages = [];

    /**
     * Creates a new instance of AddAdImagesRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImages.
     *
     * @return AdImageAddItem[]
     */
    public function getAdImages(): array
    {
        return $this->AdImages;
    }

    /**
     * Sets AdImages.
     *
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
