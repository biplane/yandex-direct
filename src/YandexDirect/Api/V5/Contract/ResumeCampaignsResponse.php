<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ResumeCampaignsResponse
{

    protected $ResumeResults = null;

    /**
     * Creates a new instance of ResumeCampaignsResponse.
     *
     * @return ResumeCampaignsResponse
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
        return $this->ResumeResults;
    }

    /**
     * Sets ResumeResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setResumeResults(array $value = null)
    {
        $this->ResumeResults = $value;

        return $this;
    }


}

