<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ShortClientInfo
{
    protected $Login = null;

    protected $FIO = null;

    protected $Role = null;

    protected $SharedAccountEnabled = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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

    public function getFIO(): ?string
    {
        return $this->FIO;
    }

    /**
     * @return $this
     */
    public function setFIO(?string $value = null)
    {
        $this->FIO = $value;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    /**
     * @return $this
     */
    public function setRole(?string $value = null)
    {
        $this->Role = $value;

        return $this;
    }

    public function getSharedAccountEnabled(): ?string
    {
        return $this->SharedAccountEnabled;
    }

    /**
     * @return $this
     */
    public function setSharedAccountEnabled(?string $value = null)
    {
        $this->SharedAccountEnabled = $value;

        return $this;
    }
}
