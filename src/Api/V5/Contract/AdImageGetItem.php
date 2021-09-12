<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageGetItem
{
//    Can be omitted.
//    protected $AdImageHash = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $Associated = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $Subtype = null;

//    Can be omitted.
//    protected $OriginalUrl = null;

//    Can be omitted.
//    protected $PreviewUrl = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

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

    /**
     * @see YesNoEnum
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAssociated(?string $value = null)
    {
        $this->Associated = $value;

        return $this;
    }

    /**
     * @see AdImageTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see AdImageTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * @see AdImageSubtypeEnum
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * @see AdImageSubtypeEnum
     *
     * @return $this
     */
    public function setSubtype(?string $value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    public function getOriginalUrl(): ?string
    {
        return $this->OriginalUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setOriginalUrl(?string $value = null)
    {
        $this->OriginalUrl = $value;

        return $this;
    }

    public function getPreviewUrl(): ?string
    {
        return $this->PreviewUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setPreviewUrl(?string $value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
