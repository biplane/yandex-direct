<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientInfoRequest
{
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
     * @return ClientInfoRequest
     */
    public function setFilter(ClientFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }
}