<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsAudienceTargetsResponse
{
    protected $SetBidsResults = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SetBidsActionResult[]
     */
    public function getSetBidsResults(): array
    {
        return $this->SetBidsResults;
    }

    /**
     * @param SetBidsActionResult[] $value
     *
     * @return $this
     */
    public function setSetBidsResults(array $value)
    {
        $this->SetBidsResults = $value;

        return $this;
    }
}
