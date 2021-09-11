<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class InstantMessenger
{
    protected $MessengerClient = null;

    protected $MessengerLogin = null;

    /**
     * Creates a new instance of InstantMessenger.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MessengerClient.
     */
    public function getMessengerClient(): string
    {
        return $this->MessengerClient;
    }

    /**
     * Sets MessengerClient.
     *
     * @return $this
     */
    public function setMessengerClient(string $value)
    {
        $this->MessengerClient = $value;

        return $this;
    }

    /**
     * Gets MessengerLogin.
     */
    public function getMessengerLogin(): string
    {
        return $this->MessengerLogin;
    }

    /**
     * Sets MessengerLogin.
     *
     * @return $this
     */
    public function setMessengerLogin(string $value)
    {
        $this->MessengerLogin = $value;

        return $this;
    }
}
