<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TurboPageGetItem
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $PreviewHref;

//    Can be omitted.
//    protected $TurboSiteHref;

//    Can be omitted.
//    protected $BoundWithHref;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

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
     * Get PreviewHref
     */
    public function getPreviewHref(): ?string
    {
        return $this->PreviewHref ?? null;
    }

    /**
     * Set PreviewHref
     *
     * @return $this
     */
    public function setPreviewHref(?string $value)
    {
        $this->PreviewHref = $value;

        return $this;
    }

    /**
     * Get TurboSiteHref
     */
    public function getTurboSiteHref(): ?string
    {
        return $this->TurboSiteHref ?? null;
    }

    /**
     * Set TurboSiteHref
     *
     * @return $this
     */
    public function setTurboSiteHref(?string $value)
    {
        $this->TurboSiteHref = $value;

        return $this;
    }

    /**
     * Get BoundWithHref
     */
    public function getBoundWithHref(): ?string
    {
        return $this->BoundWithHref ?? null;
    }

    /**
     * Set BoundWithHref
     *
     * @return $this
     */
    public function setBoundWithHref(?string $value)
    {
        $this->BoundWithHref = $value;

        return $this;
    }
}
