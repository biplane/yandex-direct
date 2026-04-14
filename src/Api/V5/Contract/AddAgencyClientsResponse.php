<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddAgencyClientsResponse extends ActionResultBase
{
//    Can be omitted.
//    protected $Login;

//    Can be omitted.
//    protected $Password;

//    Can be omitted.
//    protected $Email;

//    Can be omitted.
//    protected $ClientId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(?string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get Password
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * Set Password
     *
     * @return $this
     */
    public function setPassword(?string $value)
    {
        $this->Password = $value;

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

    /**
     * Get ClientId
     */
    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * Set ClientId
     *
     * @return $this
     */
    public function setClientId(?int $value)
    {
        $this->ClientId = $value;

        return $this;
    }
}
