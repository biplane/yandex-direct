<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdBuilderAdGet extends AdBuilderAdGetBase
{
//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $TurboPageId = null;

//    Can be omit.
//    protected $TurboPageModeration = null;

    /**
     * Creates a new instance of TextAdBuilderAdGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Href.
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Sets Href.
     *
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     */
    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * Sets TurboPageId.
     *
     * @return $this
     */
    public function setTurboPageId(?int $value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }

    /**
     * Gets TurboPageModeration.
     */
    public function getTurboPageModeration(): ?ExtensionModeration
    {
        return $this->TurboPageModeration ?? null;
    }

    /**
     * Sets TurboPageModeration.
     *
     * @return $this
     */
    public function setTurboPageModeration(?ExtensionModeration $value = null)
    {
        $this->TurboPageModeration = $value;

        return $this;
    }
}
