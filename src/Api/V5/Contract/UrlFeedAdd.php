<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UrlFeedAdd extends UrlFeedBase
{
    /** @var string */
    protected $Url;

//    Can be omitted.
//    protected $Login;

//    Can be omitted.
//    protected $Password;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Url
     */
    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * Set Url
     *
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Get Login
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
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
     * Get Password
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * Set Password
     *
     * @return $this
     */
    public function setPassword(?string $value)
    {
        $this->Password = $value;

        return $this;
    }
}
