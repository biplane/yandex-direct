<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Network
{

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $Coverage = null;

    /**
     * Creates a new instance of Network.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Bid.
     *
     * @return int|null
     */
    public function getBid()
    {
        return isset($this->Bid) ? $this->Bid : null;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return self
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets Coverage.
     *
     * @return Coverage|null
     */
    public function getCoverage()
    {
        return isset($this->Coverage) ? $this->Coverage : null;
    }

    /**
     * Sets Coverage.
     *
     * @param Coverage|null $value
     * @return self
     */
    public function setCoverage(Coverage $value = null)
    {
        $this->Coverage = $value;

        return $this;
    }


}

