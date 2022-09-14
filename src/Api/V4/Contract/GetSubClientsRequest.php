<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetSubClientsRequest
{
    protected $Login = null;

    protected $Filter = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getFilter(): ?ClientFilter
    {
        return $this->Filter;
    }

    /**
     * @return $this
     */
    public function setFilter(?ClientFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }
}
