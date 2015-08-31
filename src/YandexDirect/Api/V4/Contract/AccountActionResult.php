<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AccountActionResult
{
    /**
     * @var Error[]
     */
    protected $Errors;
    /**
     * @var int
     */
    protected $AccountID;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $URL;

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
     * Gets the Errors.
     *
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets the Errors.
     *
     * @param Error[] $Errors
     *
     * @return AccountActionResult
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

        return $this;
    }

    /**
     * Gets the AccountID.
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets the AccountID.
     *
     * @param int $AccountID
     *
     * @return AccountActionResult
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;

        return $this;
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
     * @return AccountActionResult
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the URL.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Sets the URL.
     *
     * @param string $URL
     *
     * @return AccountActionResult
     */
    public function setURL($URL)
    {
        $this->URL = $URL;

        return $this;
    }
}