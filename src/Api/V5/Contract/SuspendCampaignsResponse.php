<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendCampaignsResponse
{
//    Can be omit.
//    protected $SuspendResults = null;

    /**
     * Creates a new instance of SuspendCampaignsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SuspendResults.
     *
     * @return ActionResult[]|null
     */
    public function getSuspendResults(): ?array
    {
        return $this->SuspendResults ?? null;
    }

    /**
     * Sets SuspendResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setSuspendResults(?array $value = null)
    {
        $this->SuspendResults = $value;

        return $this;
    }
}
