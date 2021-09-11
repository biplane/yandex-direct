<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidModifiersResponse
{
//    Can be omit.
//    protected $SetResults = null;

    /**
     * Creates a new instance of SetBidModifiersResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SetResults.
     *
     * @return ActionResult[]|null
     */
    public function getSetResults(): ?array
    {
        return $this->SetResults ?? null;
    }

    /**
     * Sets SetResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setSetResults(?array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }
}
