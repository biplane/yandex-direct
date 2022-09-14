<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextImageAdGet extends ImageAdGetBase
{
//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $TurboPageId = null;

//    Can be omitted.
//    protected $TurboPageModeration = null;

    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * @return $this
     */
    public function setTurboPageId(?int $value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    public function getTurboPageModeration(): ?ExtensionModeration
    {
        return $this->TurboPageModeration ?? null;
    }

    /**
     * @return $this
     */
    public function setTurboPageModeration(?ExtensionModeration $value = null)
    {
        $this->TurboPageModeration = $value;

        return $this;
    }
}
