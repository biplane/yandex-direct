<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class EnableSharedAccountResponse
{
    /**
     * @var Error[]
     */
    protected $Errors;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int
     */
    protected $AccountID;

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
     * @return EnableSharedAccountResponse
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

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
     * @return EnableSharedAccountResponse
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

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
     * @return EnableSharedAccountResponse
     */
    public function setAccountID($AccountID)
    {
        $this->AccountID = $AccountID;

        return $this;
    }
}