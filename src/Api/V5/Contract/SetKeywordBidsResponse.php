<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetKeywordBidsResponse
{
//    Can be omit.
//    protected $SetResults = null;

    /**
     * Creates a new instance of SetKeywordBidsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SetResults.
     *
     * @return KeywordBidActionResult[]|null
     */
    public function getSetResults(): ?array
    {
        return $this->SetResults ?? null;
    }

    /**
     * Sets SetResults.
     *
     * @param KeywordBidActionResult[]|null $value
     *
     * @return $this
     */
    public function setSetResults(?array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }
}
