<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SendInviteTo
{
//    Can be omitted.
//    protected $Phone;

//    Can be omitted.
//    protected $Email;

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

    /**
     * Get Email
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email
     *
     * @return $this
     */
    public function setEmail(?string $value)
    {
        $this->Email = $value;

        return $this;
    }
}
