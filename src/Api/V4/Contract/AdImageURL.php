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
    /** @var string|null */
    protected $Login = null;

    /** @var string */
    protected $URL;

    /** @var string */
    protected $Name;

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
    public function getURL(): string
    {
        return $this->URL;
    }

    /**
     * Set URL
     *
     * @return $this
     */
    public function setURL(string $value)
    {
        $this->URL = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
