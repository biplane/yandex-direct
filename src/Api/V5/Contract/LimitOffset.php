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
//    protected $Limit = null;

//    Can be omitted.
//    protected $Offset = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLimit(): ?int
    {
        return $this->Limit ?? null;
    }

    /**
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->Offset ?? null;
    }

    /**
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
