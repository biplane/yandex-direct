<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UrlFeedGet extends UrlFeedBase
{
//    Can be omitted.
//    protected $Url = null;

//    Can be omitted.
//    protected $Login = null;

    public function getUrl(): ?string
    {
        return $this->Url ?? null;
    }

    /**
     * @return $this
     */
    public function setUrl(?string $value = null)
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
}
