<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetSubClientsRequest
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var ClientFilter
     */
    protected $Filter;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return GetSubClientsRequest
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the Filter.
     *
     * @return ClientFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets the Filter.
     *
     * @param ClientFilter $Filter
     *
     * @return GetSubClientsRequest
     */
    public function setFilter(ClientFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }
}