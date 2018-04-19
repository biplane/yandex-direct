<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ResumeAdsResponse
{

//    Can be omit.
//    protected $ResumeResults = null;

    /**
     * Creates a new instance of ResumeAdsResponse.
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
     * @return ActionResult[]|null
     */
    public function getResumeResults()
    {
        return isset($this->ResumeResults) ? $this->ResumeResults : null;
    }

    /**
     * Sets ResumeResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setResumeResults(array $value = null)
    {
        $this->ResumeResults = $value;

        return $this;
    }


}

