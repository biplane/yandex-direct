<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class LimitOffset
{
//    Can be omitted.
//    protected $Limit;

//    Can be omitted.
//    protected $Offset;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Limit
     */
    public function getLimit(): ?int
    {
        return $this->Limit ?? null;
    }

    /**
     * Set Limit
     *
     * @return $this
     */
    public function setLimit(?int $value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Get Offset
     */
    public function getOffset(): ?int
    {
        return $this->Offset ?? null;
    }

    /**
     * Set Offset
     *
     * @return $this
     */
    public function setOffset(?int $value)
    {
        $this->Offset = $value;

        return $this;
    }
}
