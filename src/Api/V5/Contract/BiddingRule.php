<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BiddingRule
{
//    Can be omit.
//    protected $SearchByTrafficVolume = null;

//    Can be omit.
//    protected $NetworkByCoverage = null;

    /**
     * Creates a new instance of BiddingRule.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SearchByTrafficVolume.
     */
    public function getSearchByTrafficVolume(): ?SearchByTrafficVolume
    {
        return $this->SearchByTrafficVolume ?? null;
    }

    /**
     * Sets SearchByTrafficVolume.
     *
     * @return $this
     */
    public function setSearchByTrafficVolume(?SearchByTrafficVolume $value = null)
    {
        $this->SearchByTrafficVolume = $value;

        return $this;
    }

    /**
     * Gets NetworkByCoverage.
     */
    public function getNetworkByCoverage(): ?NetworkByCoverage
    {
        return $this->NetworkByCoverage ?? null;
    }

    /**
     * Sets NetworkByCoverage.
     *
     * @return $this
     */
    public function setNetworkByCoverage(?NetworkByCoverage $value = null)
    {
        $this->NetworkByCoverage = $value;

        return $this;
    }
}
