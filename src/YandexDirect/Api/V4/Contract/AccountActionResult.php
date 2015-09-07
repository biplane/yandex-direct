<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AccountActionResult
{

    protected $Errors = null;

    protected $AccountID = null;

    protected $Login = null;

    protected $URL = null;

    /**
     * Creates a new instance of AccountActionResult.
     *
     * @return AccountActionResult
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Errors.
     *
     * @return Error[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param array|null $value
     * @return $this
     */
    public function setErrors(array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     *
     * @return int|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAccountID($value = null)
    {
        $this->AccountID = $value;

        return $this;
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
     * Gets URL.
     *
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Sets URL.
     *
     * @param string|null $value
     * @return $this
     */
    public function setURL($value = null)
    {
        $this->URL = $value;

        return $this;
    }


}

