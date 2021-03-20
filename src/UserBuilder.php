<?php

namespace Biplane\YandexDirect;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @deprecated
 */
class UserBuilder
{
    private $dispatcher;
    private $options;

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     */
    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;

        $this->reset();
    }

    /**
     * Sets the access token.
     *
     * @param string $token
     *
     * @return self
     */
    public function setAccessToken($token)
    {
        $this->options['access_token'] = $token;

        return $this;
    }

    /**
     * Sets the locale.
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->options['locale'] = $locale;

        return $this;
    }

    /**
     * Sets the login.
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->options['login'] = $login;

        return $this;
    }

    /**
     * Sets the master token for financial operations.
     *
     * @param string $token
     *
     * @return self
     */
    public function setMasterToken($token)
    {
        $this->options['master_token'] = $token;

        return $this;
    }

    /**
     * Enables use operator units.
     *
     * @return self
     */
    public function enableUseOperatorUnits()
    {
        $this->options['use_operator_units'] = true;

        return $this;
    }

    /**
     * Disables use operator units.
     *
     * @return self
     */
    public function disableUseOperatorUnits()
    {
        $this->options['use_operator_units'] = false;

        return $this;
    }

    /**
     * Enables the sandbox mode.
     *
     * @return self
     */
    public function enableSandbox()
    {
        $this->options['sandbox'] = true;

        return $this;
    }

    /**
     * Disables the sandbox mode.
     *
     * @return self
     */
    public function disableSandbox()
    {
        $this->options['sandbox'] = false;

        return $this;
    }

    /**
     * Builds the user object.
     *
     * @return User
     */
    public function getUser()
    {
        return new User($this->options, $this->dispatcher);
    }

    /**
     * Resets this builder.
     */
    public function reset()
    {
        $this->options = [];
    }
}
