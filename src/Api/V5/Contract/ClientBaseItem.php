<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientBaseItem
{
//    Can be omitted.
//    protected $ClientInfo;

//    Can be omitted.
//    protected $Phone;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ClientInfo
     */
    public function getClientInfo(): ?string
    {
        return $this->ClientInfo ?? null;
    }

    /**
     * Set ClientInfo
     *
     * @return $this
     */
    public function setClientInfo(?string $value)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Get Phone
     */
    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * Set Phone
     *
     * @return $this
     */
    public function setPhone(?string $value)
    {
        $this->Phone = $value;

        return $this;
    }
}
