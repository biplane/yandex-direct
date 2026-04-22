<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpcVideoAdBuilderAdGet extends AdBuilderAdGetBase
{
//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $TurboPageId;

//    Can be omitted.
//    protected $TurboPageModeration;

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

    /**
     * Get TurboPageModeration
     */
    public function getTurboPageModeration(): ?ExtensionModeration
    {
        return $this->TurboPageModeration ?? null;
    }

    /**
     * Set TurboPageModeration
     *
     * @return $this
     */
    public function setTurboPageModeration(?ExtensionModeration $value)
    {
        $this->TurboPageModeration = $value;

        return $this;
    }
}
