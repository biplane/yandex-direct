<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAdImagesResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $AdImages = null;

    /**
     * Creates a new instance of GetAdImagesResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImages.
     *
     * @return AdImageGetItem[]|null
     */
    public function getAdImages(): ?array
    {
        return $this->AdImages ?? null;
    }

    /**
     * Sets AdImages.
     *
     * @param AdImageGetItem[]|null $value
     *
     * @return $this
     */
    public function setAdImages(?array $value = null)
    {
        $this->AdImages = $value;

        return $this;
    }
}
