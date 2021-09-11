<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class IdsCriteria
{
    protected $Ids = [];

    /**
     * Creates a new instance of IdsCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]
     */
    public function getIds(): array
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }
}
