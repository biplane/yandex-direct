<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class InstantMessenger
{
    /** @var string */
    protected $MessengerClient;

    /** @var string */
    protected $MessengerLogin;

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
     * Get MessengerClient
     */
    public function getMessengerClient(): string
    {
        return $this->MessengerClient;
    }

    /**
     * Set MessengerClient
     *
     * @return $this
     */
    public function setMessengerClient(string $value)
    {
        $this->MessengerClient = $value;

        return $this;
    }

    /**
     * Get MessengerLogin
     */
    public function getMessengerLogin(): string
    {
        return $this->MessengerLogin;
    }

    /**
     * Set MessengerLogin
     *
     * @return $this
     */
    public function setMessengerLogin(string $value)
    {
        $this->MessengerLogin = $value;

        return $this;
    }
}
