<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * @deprecated
 */
class UserBuilder
{
    /** @var EventDispatcherInterface */
    private $dispatcher;
    /** @var array<string, mixed> */
    private $options;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;

        $this->reset();
    }

    /**
     * Sets the access token.
     */
    public function setAccessToken(string $token): self
    {
        $this->options['access_token'] = $token;

        return $this;
    }

    /**
     * Sets the locale.
     */
    public function setLocale(string $locale): self
    {
        $this->options['locale'] = $locale;

        return $this;
    }

    /**
     * Sets the login.
     */
    public function setLogin(string $login): self
    {
        $this->options['login'] = $login;

        return $this;
    }

    /**
     * Sets the master token for financial operations.
     */
    public function setMasterToken(string $token): self
    {
        $this->options['master_token'] = $token;

        return $this;
    }

    /**
     * Enables use operator units.
     */
    public function enableUseOperatorUnits(): self
    {
        $this->options['use_operator_units'] = true;

        return $this;
    }

    /**
     * Disables use operator units.
     */
    public function disableUseOperatorUnits(): self
    {
        $this->options['use_operator_units'] = false;

        return $this;
    }

    /**
     * Enables the sandbox mode.
     */
    public function enableSandbox(): self
    {
        $this->options['sandbox'] = true;

        return $this;
    }

    /**
     * Disables the sandbox mode.
     */
    public function disableSandbox(): self
    {
        $this->options['sandbox'] = false;

        return $this;
    }

    /**
     * Builds the user object.
     */
    public function getUser(): User
    {
        return new User($this->options, $this->dispatcher);
    }

    /**
     * Resets this builder.
     */
    public function reset(): void
    {
        $this->options = [];
    }
}
