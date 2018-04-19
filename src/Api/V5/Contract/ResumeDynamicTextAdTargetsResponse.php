<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ResumeDynamicTextAdTargetsResponse
{

    protected $ResumeResults = [];

    /**
     * Creates a new instance of ResumeDynamicTextAdTargetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ResumeResults.
     *
     * @return ActionResult[]
     */
    public function getResumeResults()
    {
        return $this->ResumeResults;
    }

    /**
     * Sets ResumeResults.
     *
     * @param ActionResult[] $value
     * @return $this
     */
    public function setResumeResults(array $value)
    {
        $this->ResumeResults = $value;

        return $this;
    }


}

