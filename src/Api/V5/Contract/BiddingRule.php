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
//    protected $SearchByTrafficVolume;

//    Can be omitted.
//    protected $NetworkByCoverage;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get SearchByTrafficVolume
     */
    public function getSearchByTrafficVolume(): ?SearchByTrafficVolume
    {
        return $this->SearchByTrafficVolume ?? null;
    }

    /**
     * Set SearchByTrafficVolume
     *
     * @return $this
     */
    public function setSearchByTrafficVolume(?SearchByTrafficVolume $value)
    {
        $this->SearchByTrafficVolume = $value;

        return $this;
    }

    /**
     * Get NetworkByCoverage
     */
    public function getNetworkByCoverage(): ?NetworkByCoverage
    {
        return $this->NetworkByCoverage ?? null;
    }

    /**
     * Set NetworkByCoverage
     *
     * @return $this
     */
    public function setNetworkByCoverage(?NetworkByCoverage $value)
    {
        $this->NetworkByCoverage = $value;

        return $this;
    }
}
