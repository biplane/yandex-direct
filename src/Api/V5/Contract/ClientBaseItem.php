<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientBaseItem
{
//    Can be omit.
//    protected $ClientInfo = null;

//    Can be omit.
//    protected $Phone = null;

    /**
     * Creates a new instance of ClientBaseItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ClientInfo.
     */
    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * Sets ClientInfo.
     *
     * @return $this
     */
    public function setClientInfo(?string $value = null)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Gets Phone.
     */
    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * Sets Phone.
     *
     * @return $this
     */
    public function setPhone(?string $value = null)
    {
        $this->Phone = $value;

        return $this;
    }
}
