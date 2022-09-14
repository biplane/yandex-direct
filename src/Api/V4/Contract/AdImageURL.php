<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageURL
{
    protected $Login = null;

    protected $URL = null;

    protected $Name = null;

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

    public function getURL(): string
    {
        return $this->URL;
    }

    /**
     * @return $this
     */
    public function setURL(string $value)
    {
        $this->URL = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
