<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return self
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Filter.
     *
     * @return ClientFilter|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @param ClientFilter|null $value
     * @return self
     */
    public function setFilter(ClientFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }


}

