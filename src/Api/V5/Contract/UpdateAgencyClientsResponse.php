<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAgencyClientsResponse
{
    protected $UpdateResults = [];

    /**
     * Creates a new instance of UpdateAgencyClientsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets UpdateResults.
     *
     * @return ClientsActionResult[]
     */
    public function getUpdateResults(): array
    {
        return $this->UpdateResults;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ClientsActionResult[] $value
     *
     * @return $this
     */
    public function setUpdateResults(array $value)
    {
        $this->UpdateResults = $value;

        return $this;
    }
}
