<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EnableSharedAccountResponse
{
    protected $Errors = null;

    protected $Login = null;

    protected $AccountID = null;

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
}
