<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAgencyClientsResponse extends ActionResultBase
{
//    Can be omitted.
//    protected $Login = null;

//    Can be omitted.
//    protected $Password = null;

//    Can be omitted.
//    protected $Email = null;

//    Can be omitted.
//    protected $ClientId = null;

    public function getLogin(): ?string
    {
        return $this->Login ?? null;
    }

    /**
     * @return $this
     */
    public function setLogin(?string $value = null)
    {
        $this->Login = $value;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * @return $this
     */
    public function setPassword(?string $value = null)
    {
        $this->Password = $value;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }
}
