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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ClientsActionResult[]
     */
    public function getUpdateResults(): array
    {
        return $this->UpdateResults;
    }

    /**
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
