<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EnableSharedAccountRequest
{

    protected $Login = null;

    /**
     * Creates a new instance of EnableSharedAccountRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return self
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }


}

