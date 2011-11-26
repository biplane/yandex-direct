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
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return GetSubClientsRequest
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * @return ClientFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param ClientFilter $Filter
     * @return GetSubClientsRequest
     */
    public function setFilter(ClientFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }
}