<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteKeywordsResponse
{
    protected $DeleteResults = [];

    /**
     * Creates a new instance of DeleteKeywordsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets DeleteResults.
     *
     * @return ActionResult[]
     */
    public function getDeleteResults(): array
    {
        return $this->DeleteResults;
    }

    /**
     * Sets DeleteResults.
     *
     * @param ActionResult[] $value
     *
     * @return $this
     */
    public function setDeleteResults(array $value)
    {
        $this->DeleteResults = $value;

        return $this;
    }
}
