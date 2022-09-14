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
    protected $MessengerClient = null;

    protected $MessengerLogin = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMessengerClient(): string
    {
        return $this->MessengerClient;
    }

    /**
     * @return $this
     */
    public function setMessengerClient(string $value)
    {
        $this->MessengerClient = $value;

        return $this;
    }

    public function getMessengerLogin(): string
    {
        return $this->MessengerLogin;
    }

    /**
     * @return $this
     */
    public function setMessengerLogin(string $value)
    {
        $this->MessengerLogin = $value;

        return $this;
    }
}
