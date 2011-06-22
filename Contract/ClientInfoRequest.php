<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class ClientInfoRequest
{
    /**
     * @var ClientFilter
     */
    protected $Filter;

    /**
     * @return ClientFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param ClientFilter $Filter
     * @return ClientInfoRequest
     */
    public function setFilter(ClientFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }
}