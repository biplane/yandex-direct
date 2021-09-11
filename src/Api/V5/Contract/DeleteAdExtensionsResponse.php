<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdExtensionsResponse
{
//    Can be omit.
//    protected $DeleteResults = null;

    /**
     * Creates a new instance of DeleteAdExtensionsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets DeleteResults.
     *
     * @return ActionResult[]|null
     */
    public function getDeleteResults(): ?array
    {
        return $this->DeleteResults ?? null;
    }

    /**
     * Sets DeleteResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setDeleteResults(?array $value = null)
    {
        $this->DeleteResults = $value;

        return $this;
    }
}
