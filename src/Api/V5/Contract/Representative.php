<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Representative
{

    protected $Email = null;

    protected $Login = null;

    protected $Role = null;

    /**
     * Creates a new instance of Representative.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->Email = $value;

        return $this;
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
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Role.
     *
     * @return string
     * @see RepresentativeRoleEnum
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Sets Role.
     *
     * @param string $value
     * @return $this
     * @see RepresentativeRoleEnum
     */
    public function setRole($value)
    {
        $this->Role = $value;

        return $this;
    }


}

