<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ResumeAdsResponse
{
//    Can be omitted.
//    protected $ResumeResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]|null
     */
    public function getResumeResults(): ?array
    {
        return $this->ResumeResults ?? null;
    }

    /**
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
