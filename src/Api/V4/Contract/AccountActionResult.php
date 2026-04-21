<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AccountActionResult
{
//    Can be omitted.
//    protected $Errors;

    /** @var int|null */
    protected $AccountID = null;

    /** @var string|null */
    protected $Login = null;

    /** @var string|null */
    protected $URL = null;

    /** @var string|null */
    protected $PurchaseToken = null;

    /** @var string|null */
    protected $Status = null;

    /** @var string|null */
    protected $RedirectUrl = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Errors
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors ?? null;
    }

    /**
     * Set Errors
     *
     * @param list<Error>|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Get AccountID
     */
    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID
     *
     * @return $this
     */
    public function setAccountID(?int $value)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(?string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get URL
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * Set URL
     *
     * @return $this
     */
    public function setURL(?string $value)
    {
        $this->URL = $value;

        return $this;
    }

    /**
     * Get PurchaseToken
     */
    public function getPurchaseToken(): ?string
    {
        return $this->PurchaseToken;
    }

    /**
     * Set PurchaseToken
     *
     * @return $this
     */
    public function setPurchaseToken(?string $value)
    {
        $this->PurchaseToken = $value;

        return $this;
    }

    /**
     * Get Status
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Set Status
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get RedirectUrl
     */
    public function getRedirectUrl(): ?string
    {
        return $this->RedirectUrl;
    }

    /**
     * Set RedirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl(?string $value)
    {
        $this->RedirectUrl = $value;

        return $this;
    }
}
