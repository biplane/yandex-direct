<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdImagesResponse
{
//    Can be omitted.
//    protected $DeleteResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AdImageActionResult[]|null
     */
    public function getDeleteResults(): ?array
    {
        return $this->DeleteResults ?? null;
    }

    /**
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
