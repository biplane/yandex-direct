<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextImageAdAdd extends ImageAdAddBase
{
//    Can be omitted.
//    protected $FinalUrl;

//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $TurboPageId;

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
     * Get FinalUrl
     */
    public function getFinalUrl(): ?string
    {
        return $this->FinalUrl ?? null;
    }

    /**
     * Set FinalUrl
     *
     * @return $this
     */
    public function setFinalUrl(?string $value)
    {
        $this->FinalUrl = $value;

        return $this;
    }

    /**
     * Get Href
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Set Href
     *
     * @return $this
     */
    public function setHref(?string $value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Get TurboPageId
     */
    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * Set TurboPageId
     *
     * @return $this
     */
    public function setTurboPageId(?int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }
}
