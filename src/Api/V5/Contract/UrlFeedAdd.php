<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UrlFeedAdd extends UrlFeedBase
{
    protected $Url = null;

//    Can be omitted.
//    protected $Login = null;

//    Can be omitted.
//    protected $Password = null;

    public function getUrl(): string
    {
        return $this->Url;
    }

    /**
     * @return $this
     */
    public function setUrl(string $value)
    {
        $this->Url = $value;

        return $this;
    }

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
}
