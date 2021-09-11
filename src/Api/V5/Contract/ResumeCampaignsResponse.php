<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ResumeCampaignsResponse
{
//    Can be omit.
//    protected $ResumeResults = null;

    /**
     * Creates a new instance of ResumeCampaignsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ResumeResults.
     *
     * @return ActionResult[]|null
     */
    public function getResumeResults(): ?array
    {
        return $this->ResumeResults ?? null;
    }

    /**
     * Sets ResumeResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setResumeResults(?array $value = null)
    {
        $this->ResumeResults = $value;

        return $this;
    }
}
