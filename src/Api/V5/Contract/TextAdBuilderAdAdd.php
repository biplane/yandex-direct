<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdBuilderAdAdd extends AdBuilderAdAddBase
{
//    Can be omitted.
//    protected $FinalUrl = null;

//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $TurboPageId = null;

    public function getFinalUrl(): ?string
    {
        return $this->FinalUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setFinalUrl(?string $value = null)
    {
        $this->FinalUrl = $value;

        return $this;
    }

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
}
