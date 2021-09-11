<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Errors.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     */
    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @return $this
     */
    public function setAccountID(?int $value = null)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets URL.
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * Sets URL.
     *
     * @return $this
     */
    public function setURL(?string $value = null)
    {
        $this->URL = $value;

        return $this;
    }

    /**
     * Gets PurchaseToken.
     */
    public function getPurchaseToken(): ?string
    {
        return $this->PurchaseToken;
    }

    /**
     * Sets PurchaseToken.
     *
     * @return $this
     */
    public function setPurchaseToken(?string $value = null)
    {
        $this->PurchaseToken = $value;

        return $this;
    }

    /**
     * Gets Status.
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }
}
