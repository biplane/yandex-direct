<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ResumeSmartAdTargetsResponse
{
    protected $ResumeResults = [];

    /**
     * Creates a new instance of ResumeSmartAdTargetsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ResumeResults.
     *
     * @return ActionResult[]
     */
    public function getResumeResults(): array
    {
        return $this->ResumeResults;
    }

    /**
     * Sets ResumeResults.
     *
     * @param ActionResult[] $value
     *
     * @return $this
     */
    public function setResumeResults(array $value)
    {
        $this->ResumeResults = $value;

        return $this;
    }
}
