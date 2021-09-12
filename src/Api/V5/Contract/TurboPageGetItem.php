<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TurboPageGetItem
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $PreviewHref = null;

//    Can be omitted.
//    protected $TurboSiteHref = null;

//    Can be omitted.
//    protected $BoundWithHref = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

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

    public function getPreviewHref(): ?string
    {
        return $this->PreviewHref ?? null;
    }

    /**
     * @return $this
     */
    public function setPreviewHref(?string $value = null)
    {
        $this->PreviewHref = $value;

        return $this;
    }

    public function getTurboSiteHref(): ?string
    {
        return $this->TurboSiteHref ?? null;
    }

    /**
     * @return $this
     */
    public function setTurboSiteHref(?string $value = null)
    {
        $this->TurboSiteHref = $value;

        return $this;
    }

    public function getBoundWithHref(): ?string
    {
        return $this->BoundWithHref ?? null;
    }

    /**
     * @return $this
     */
    public function setBoundWithHref(?string $value = null)
    {
        $this->BoundWithHref = $value;

        return $this;
    }
}
