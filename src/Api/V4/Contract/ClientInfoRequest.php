<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientInfoRequest
{
    protected $Filter = null;

    /**
     * Creates a new instance of ClientInfoRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Filter.
     */
    public function getFilter(): ?ClientFilter
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @return $this
     */
    public function setFilter(?ClientFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }
}
