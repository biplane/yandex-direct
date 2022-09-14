<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BiddingRule
{
//    Can be omitted.
//    protected $SearchByTrafficVolume = null;

//    Can be omitted.
//    protected $NetworkByCoverage = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSearchByTrafficVolume(): ?SearchByTrafficVolume
    {
        return $this->SearchByTrafficVolume ?? null;
    }

    /**
     * @return $this
     */
    public function setSearchByTrafficVolume(?SearchByTrafficVolume $value = null)
    {
        $this->SearchByTrafficVolume = $value;

        return $this;
    }

    public function getNetworkByCoverage(): ?NetworkByCoverage
    {
        return $this->NetworkByCoverage ?? null;
    }

    /**
     * @return $this
     */
    public function setNetworkByCoverage(?NetworkByCoverage $value = null)
    {
        $this->NetworkByCoverage = $value;

        return $this;
    }
}
