<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAdsResponse
{
//    Can be omit.
//    protected $UpdateResults = null;

    /**
     * Creates a new instance of UpdateAdsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets UpdateResults.
     *
     * @return ActionResult[]|null
     */
    public function getUpdateResults(): ?array
    {
        return $this->UpdateResults ?? null;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setUpdateResults(?array $value = null)
    {
        $this->UpdateResults = $value;

        return $this;
    }
}
