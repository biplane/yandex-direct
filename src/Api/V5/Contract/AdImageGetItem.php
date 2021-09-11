<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageGetItem
{
//    Can be omit.
//    protected $AdImageHash = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $Associated = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Subtype = null;

//    Can be omit.
//    protected $OriginalUrl = null;

//    Can be omit.
//    protected $PreviewUrl = null;

    /**
     * Creates a new instance of AdImageGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdImageHash.
     */
    public function getAdImageHash(): ?string
    {
        return $this->AdImageHash ?? null;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(?string $value = null)
    {
        $this->AdImageHash = $value;

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
     * Gets Associated.
     *
     * @see YesNoEnum
     */
    public function getAssociated(): ?string
    {
        return $this->Associated ?? null;
    }

    /**
     * Sets Associated.
     *
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
     * Gets Type.
     *
     * @see AdImageTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
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
     * Gets Subtype.
     *
     * @see AdImageSubtypeEnum
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * Sets Subtype.
     *
     * @see AdImageSubtypeEnum
     *
     * @return $this
     */
    public function setSubtype(?string $value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Gets OriginalUrl.
     */
    public function getOriginalUrl(): ?string
    {
        return $this->OriginalUrl ?? null;
    }

    /**
     * Sets OriginalUrl.
     *
     * @return $this
     */
    public function setOriginalUrl(?string $value = null)
    {
        $this->OriginalUrl = $value;

        return $this;
    }

    /**
     * Gets PreviewUrl.
     */
    public function getPreviewUrl(): ?string
    {
        return $this->PreviewUrl ?? null;
    }

    /**
     * Sets PreviewUrl.
     *
     * @return $this
     */
    public function setPreviewUrl(?string $value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
