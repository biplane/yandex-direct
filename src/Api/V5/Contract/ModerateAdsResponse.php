<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ModerateAdsResponse
{
//    Can be omit.
//    protected $ModerateResults = null;

    /**
     * Creates a new instance of ModerateAdsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ModerateResults.
     *
     * @return ActionResult[]|null
     */
    public function getModerateResults(): ?array
    {
        return $this->ModerateResults ?? null;
    }

    /**
     * Sets ModerateResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setModerateResults(?array $value = null)
    {
        $this->ModerateResults = $value;

        return $this;
    }
}
