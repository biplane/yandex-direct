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

    protected $PurchaseToken = null;

    protected $Status = null;

    /**
     * Creates a new instance of AccountActionResult.
     *
     * @return self
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
     * @param Error[]|null $value
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setURL($value = null)
    {
        $this->URL = $value;

        return $this;
    }

    /**
     * Gets PurchaseToken.
     *
     * @return string|null
     */
    public function getPurchaseToken()
    {
        return $this->PurchaseToken;
    }

    /**
     * Sets PurchaseToken.
     *
     * @param string|null $value
     * @return self
     */
    public function setPurchaseToken($value = null)
    {
        $this->PurchaseToken = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }


}

