<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ShortClientInfo
{

    protected $Login = null;

    protected $FIO = null;

    protected $Role = null;

    protected $SharedAccountEnabled = null;

    /**
     * Creates a new instance of ShortClientInfo.
     *
     * @return ShortClientInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets FIO.
     *
     * @return string|null
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @param string|null $value
     * @return $this
     */
    public function setFIO($value = null)
    {
        $this->FIO = $value;

        return $this;
    }

    /**
     * Gets Role.
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Sets Role.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRole($value = null)
    {
        $this->Role = $value;

        return $this;
    }

    /**
     * Gets SharedAccountEnabled.
     *
     * @return string|null
     */
    public function getSharedAccountEnabled()
    {
        return $this->SharedAccountEnabled;
    }

    /**
     * Sets SharedAccountEnabled.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSharedAccountEnabled($value = null)
    {
        $this->SharedAccountEnabled = $value;

        return $this;
    }


}

