<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsAudienceTargetsResponse
{

    protected $SetBidsResults = [];

    /**
     * Creates a new instance of SetBidsAudienceTargetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SetBidsResults.
     *
     * @return SetBidsActionResult[]
     */
    public function getSetBidsResults()
    {
        return $this->SetBidsResults;
    }

    /**
     * Sets SetBidsResults.
     *
     * @param SetBidsActionResult[] $value
     * @return $this
     */
    public function setSetBidsResults(array $value)
    {
        $this->SetBidsResults = $value;

        return $this;
    }


}

