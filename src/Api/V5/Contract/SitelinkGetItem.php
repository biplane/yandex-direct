<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinkGetItem
{
//    Can be omit.
//    protected $Title = null;

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $Description = null;

//    Can be omit.
//    protected $TurboPageId = null;

    /**
     * Creates a new instance of SitelinkGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Title.
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(?string $value = null)
    {
        $this->Title = $value;

        return $this;
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
     * Gets Description.
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Sets Description.
     *
     * @return $this
     */
    public function setDescription(?string $value = null)
    {
        $this->Description = $value;

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
}
