<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Network
{
//    Can be omitted.
//    protected $Bid;

//    Can be omitted.
//    protected $Coverage;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Bid
     */
    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(?int $value)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Get Coverage
     */
    public function getCoverage(): ?Coverage
    {
        return $this->Coverage ?? null;
    }

    /**
     * Set Coverage
     *
     * @return $this
     */
    public function setCoverage(?Coverage $value)
    {
        $this->Coverage = $value;

        return $this;
    }
}
