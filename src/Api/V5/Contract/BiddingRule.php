<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SearchByTrafficVolume.
     *
     * @return SearchByTrafficVolume|null
     */
    public function getSearchByTrafficVolume()
    {
        return isset($this->SearchByTrafficVolume) ? $this->SearchByTrafficVolume : null;
    }

    /**
     * Sets SearchByTrafficVolume.
     *
     * @param SearchByTrafficVolume|null $value
     * @return $this
     */
    public function setSearchByTrafficVolume(SearchByTrafficVolume $value = null)
    {
        $this->SearchByTrafficVolume = $value;

        return $this;
    }

    /**
     * Gets NetworkByCoverage.
     *
     * @return NetworkByCoverage|null
     */
    public function getNetworkByCoverage()
    {
        return isset($this->NetworkByCoverage) ? $this->NetworkByCoverage : null;
    }

    /**
     * Sets NetworkByCoverage.
     *
     * @param NetworkByCoverage|null $value
     * @return $this
     */
    public function setNetworkByCoverage(NetworkByCoverage $value = null)
    {
        $this->NetworkByCoverage = $value;

        return $this;
    }


}

