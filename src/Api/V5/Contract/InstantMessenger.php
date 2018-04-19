<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MessengerClient.
     *
     * @return string
     */
    public function getMessengerClient()
    {
        return $this->MessengerClient;
    }

    /**
     * Sets MessengerClient.
     *
     * @param string $value
     * @return $this
     */
    public function setMessengerClient($value)
    {
        $this->MessengerClient = $value;

        return $this;
    }

    /**
     * Gets MessengerLogin.
     *
     * @return string
     */
    public function getMessengerLogin()
    {
        return $this->MessengerLogin;
    }

    /**
     * Sets MessengerLogin.
     *
     * @param string $value
     * @return $this
     */
    public function setMessengerLogin($value)
    {
        $this->MessengerLogin = $value;

        return $this;
    }


}

