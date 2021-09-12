<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientBaseItem
{
//    Can be omitted.
//    protected $ClientInfo = null;

//    Can be omitted.
//    protected $Phone = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * @return $this
     */
    public function setClientInfo(?string $value = null)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * @return $this
     */
    public function setPhone(?string $value = null)
    {
        $this->Phone = $value;

        return $this;
    }
}
