<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsResponse
{
//    Can be omitted.
//    protected $SetResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return BidActionResult[]|null
     */
    public function getSetResults(): ?array
    {
        return $this->SetResults ?? null;
    }

    /**
     * @param BidActionResult[]|null $value
     *
     * @return $this
     */
    public function setSetResults(?array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }
}
