<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SetBidsDynamicTextAdTargetsRequest
{
    protected $Bids = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SetBidsItem[]|null
     */
    public function getBids(): ?array
    {
        return $this->Bids;
    }

    /**
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
