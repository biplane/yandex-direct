<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetSubClientsRequest
{
    protected $Login = null;

    protected $Filter = null;

    /**
     * Creates a new instance of GetSubClientsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
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
