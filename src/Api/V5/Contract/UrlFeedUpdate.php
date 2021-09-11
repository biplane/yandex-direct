<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UrlFeedUpdate extends UrlFeedBase
{
//    Can be omit.
//    protected $Url = null;

//    Can be omit.
//    protected $Login = null;

//    Can be omit.
//    protected $Password = null;

    /**
     * Creates a new instance of UrlFeedUpdate.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Url.
     */
    public function getUrl(): ?string
    {
        return $this->Url ?? null;
    }

    /**
     * Sets Url.
     *
     * @return $this
     */
    public function setUrl(?string $value = null)
    {
        $this->Url = $value;

        return $this;
    }

    /**
     * Gets Login.
     */
    public function getLogin(): ?string
    {
        return $this->Login ?? null;
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
     * Gets Password.
     */
    public function getPassword(): ?string
    {
        return $this->Password ?? null;
    }

    /**
     * Sets Password.
     *
     * @return $this
     */
    public function setPassword(?string $value = null)
    {
        $this->Password = $value;

        return $this;
    }
}
