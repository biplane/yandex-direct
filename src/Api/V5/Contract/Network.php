<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Network
{

    protected $Bid = null;

    protected $Coverage = null;

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
        return $this->Bid;
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
        return $this->Coverage;
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

