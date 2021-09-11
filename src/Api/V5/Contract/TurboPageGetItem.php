<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TurboPageGetItem
{
//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $PreviewHref = null;

//    Can be omit.
//    protected $TurboSiteHref = null;

//    Can be omit.
//    protected $BoundWithHref = null;

    /**
     * Creates a new instance of TurboPageGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

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
     * Gets PreviewHref.
     */
    public function getPreviewHref(): ?string
    {
        return $this->PreviewHref ?? null;
    }

    /**
     * Sets PreviewHref.
     *
     * @return $this
     */
    public function setPreviewHref(?string $value = null)
    {
        $this->PreviewHref = $value;

        return $this;
    }

    /**
     * Gets TurboSiteHref.
     */
    public function getTurboSiteHref(): ?string
    {
        return $this->TurboSiteHref ?? null;
    }

    /**
     * Sets TurboSiteHref.
     *
     * @return $this
     */
    public function setTurboSiteHref(?string $value = null)
    {
        $this->TurboSiteHref = $value;

        return $this;
    }

    /**
     * Gets BoundWithHref.
     */
    public function getBoundWithHref(): ?string
    {
        return $this->BoundWithHref ?? null;
    }

    /**
     * Sets BoundWithHref.
     *
     * @return $this
     */
    public function setBoundWithHref(?string $value = null)
    {
        $this->BoundWithHref = $value;

        return $this;
    }
}
