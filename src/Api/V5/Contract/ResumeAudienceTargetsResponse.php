<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ResumeAudienceTargetsResponse
{
    protected $ResumeResults = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]
     */
    public function getResumeResults(): array
    {
        return $this->ResumeResults;
    }

    /**
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
