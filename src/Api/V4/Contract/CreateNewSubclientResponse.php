<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CreateNewSubclientResponse
{
    protected $Login = null;

    protected $Password = null;

    protected $FIO = null;

    protected $Email = null;

    protected $ClientID = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * @return $this
     */
    public function setPassword(string $value)
    {
        $this->Password = $value;

        return $this;
    }

    public function getFIO(): string
    {
        return $this->FIO;
    }

    /**
     * @return $this
     */
    public function setFIO(string $value)
    {
        $this->FIO = $value;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    public function getClientID(): int
    {
        return $this->ClientID;
    }

    /**
     * @return $this
     */
    public function setClientID(int $value)
    {
        $this->ClientID = $value;

        return $this;
    }
}
