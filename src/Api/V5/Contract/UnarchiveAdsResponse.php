<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UnarchiveAdsResponse
{
//    Can be omit.
//    protected $UnarchiveResults = null;

    /**
     * Creates a new instance of UnarchiveAdsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets UnarchiveResults.
     *
     * @return ActionResult[]|null
     */
    public function getUnarchiveResults(): ?array
    {
        return $this->UnarchiveResults ?? null;
    }

    /**
     * Sets UnarchiveResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setUnarchiveResults(?array $value = null)
    {
        $this->UnarchiveResults = $value;

        return $this;
    }
}
