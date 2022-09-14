<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientInfoRequest
{
    protected $Filter = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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
