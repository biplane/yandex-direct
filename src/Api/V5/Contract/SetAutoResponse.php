<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoResponse
{
//    Can be omitted.
//    protected $SetAutoResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return KeywordBidActionResult[]|null
     */
    public function getSetAutoResults(): ?array
    {
        return $this->SetAutoResults ?? null;
    }

    /**
     * @param KeywordBidActionResult[]|null $value
     *
     * @return $this
     */
    public function setSetAutoResults(?array $value = null)
    {
        $this->SetAutoResults = $value;

        return $this;
    }
}
