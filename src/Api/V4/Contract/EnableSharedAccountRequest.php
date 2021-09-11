<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EnableSharedAccountRequest
{
    protected $Login = null;

    /**
     * Creates a new instance of EnableSharedAccountRequest.
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
}
