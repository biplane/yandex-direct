<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddDynamicTextAdTargetsResponse
{
    protected $AddResults = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]
     */
    public function getAddResults(): array
    {
        return $this->AddResults;
    }

    /**
     * @param ActionResult[] $value
     *
     * @return $this
     */
    public function setAddResults(array $value)
    {
        $this->AddResults = $value;

        return $this;
    }
}
