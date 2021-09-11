<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsDynamicTextAdTargetsRequest
{
    protected $Bids = null;

    /**
     * Creates a new instance of SetBidsDynamicTextAdTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return SetBidsItem[]|null
     */
    public function getBids(): ?array
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param SetBidsItem[]|null $value
     *
     * @return $this
     */
    public function setBids(?array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }
}
