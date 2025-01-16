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
    protected $Errors = null;

    protected $AccountID = null;

    protected $Login = null;

    protected $URL = null;

    protected $PurchaseToken = null;

    protected $Status = null;

    protected $RedirectUrl = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * @return $this
     */
    public function setAccountID(?int $value = null)
    {
        $this->AccountID = $value;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * @return $this
     */
    public function setURL(?string $value = null)
    {
        $this->URL = $value;

        return $this;
    }

    public function getPurchaseToken(): ?string
    {
        return $this->PurchaseToken;
    }

    /**
     * @return $this
     */
    public function setPurchaseToken(?string $value = null)
    {
        $this->PurchaseToken = $value;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    public function getRedirectUrl(): ?string
    {
        return $this->RedirectUrl;
    }

    /**
     * @return $this
     */
    public function setRedirectUrl(?string $value = null)
    {
        $this->RedirectUrl = $value;

        return $this;
    }
}
