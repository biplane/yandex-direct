<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddSitelinksResponse
{
//    Can be omit.
//    protected $AddResults = null;

    /**
     * Creates a new instance of AddSitelinksResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AddResults.
     *
     * @return ActionResult[]|null
     */
    public function getAddResults(): ?array
    {
        return $this->AddResults ?? null;
    }

    /**
     * Sets AddResults.
     *
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setAddResults(?array $value = null)
    {
        $this->AddResults = $value;

        return $this;
    }
}
