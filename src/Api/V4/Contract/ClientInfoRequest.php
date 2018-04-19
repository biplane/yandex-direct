<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientInfoRequest
{

    protected $Filter = null;

    /**
     * Creates a new instance of ClientInfoRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * @return $this
     */
    public function setFilter(ClientFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }


}

