<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bid.
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Sets Bid.
     *
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets Coverage.
     */
    public function getCoverage(): ?Coverage
    {
        return $this->Coverage ?? null;
    }

    /**
     * Sets Coverage.
     *
     * @return $this
     */
    public function setCoverage(?Coverage $value = null)
    {
        $this->Coverage = $value;

        return $this;
    }
}
