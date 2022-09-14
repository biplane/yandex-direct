<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetBidsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Bids = null;

    /**
     * @return BidGetItem[]|null
     */
    public function getBids(): ?array
    {
        return $this->Bids ?? null;
    }

    /**
     * @param BidGetItem[]|null $value
     *
     * @return $this
     */
    public function setBids(?array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }
}
