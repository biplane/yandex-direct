<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class EnableSharedAccountRequest
{
    /**
     * @var string
     */
    protected $Login;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return EnableSharedAccountRequest
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }
}