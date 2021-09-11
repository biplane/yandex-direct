<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreateNewSubclientResponse
{
    protected $Login = null;

    protected $Password = null;

    protected $FIO = null;

    protected $Email = null;

    protected $ClientID = null;

    /**
     * Creates a new instance of CreateNewSubclientResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Password.
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * Sets Password.
     *
     * @return $this
     */
    public function setPassword(string $value)
    {
        $this->Password = $value;

        return $this;
    }

    /**
     * Gets FIO.
     */
    public function getFIO(): string
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @return $this
     */
    public function setFIO(string $value)
    {
        $this->FIO = $value;

        return $this;
    }

    /**
     * Gets Email.
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets ClientID.
     */
    public function getClientID(): int
    {
        return $this->ClientID;
    }

    /**
     * Sets ClientID.
     *
     * @return $this
     */
    public function setClientID(int $value)
    {
        $this->ClientID = $value;

        return $this;
    }
}
