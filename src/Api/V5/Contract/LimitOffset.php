<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LimitOffset
{
//    Can be omit.
//    protected $Limit = null;

//    Can be omit.
//    protected $Offset = null;

    /**
     * Creates a new instance of LimitOffset.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Limit.
     */
    public function getLimit(): ?int
    {
        return $this->Limit ?? null;
    }

    /**
     * Sets Limit.
     *
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     */
    public function getOffset(): ?int
    {
        return $this->Offset ?? null;
    }

    /**
     * Sets Offset.
     *
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
