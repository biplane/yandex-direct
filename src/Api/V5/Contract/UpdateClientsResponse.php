<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UpdateClientsResponse
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
