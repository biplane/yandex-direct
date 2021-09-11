<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdImagesResponse
{
//    Can be omit.
//    protected $DeleteResults = null;

    /**
     * Creates a new instance of DeleteAdImagesResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets DeleteResults.
     *
     * @return AdImageActionResult[]|null
     */
    public function getDeleteResults(): ?array
    {
        return $this->DeleteResults ?? null;
    }

    /**
     * Sets DeleteResults.
     *
     * @param AdImageActionResult[]|null $value
     *
     * @return $this
     */
    public function setDeleteResults(?array $value = null)
    {
        $this->DeleteResults = $value;

        return $this;
    }
}
