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
//    protected $Phone = null;

//    Can be omitted.
//    protected $Email = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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

    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }
}
