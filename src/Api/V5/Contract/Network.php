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
//    protected $Bid = null;

//    Can be omitted.
//    protected $Coverage = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBid(): ?int
    {
        return $this->Bid ?? null;
    }

    /**
     * @return $this
     */
    public function setBid(?int $value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    public function getCoverage(): ?Coverage
    {
        return $this->Coverage ?? null;
    }

    /**
     * @return $this
     */
    public function setCoverage(?Coverage $value = null)
    {
        $this->Coverage = $value;

        return $this;
    }
}
