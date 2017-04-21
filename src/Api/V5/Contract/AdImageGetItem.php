<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdImageGetItem
{

    protected $AdImageHash = null;

    protected $Name = null;

    protected $Associated = null;

    protected $Type = null;

    protected $Subtype = null;

    protected $OriginalUrl = null;

    protected $PreviewUrl = null;

    /**
     * Creates a new instance of AdImageGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdImageHash.
     *
     * @return string|null
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string|null $value
     * @return self
     */
    public function setAdImageHash($value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return self
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Associated.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAssociated()
    {
        return $this->Associated;
    }

    /**
     * Sets Associated.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setAssociated($value = null)
    {
        $this->Associated = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see AdImageTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
     * @see AdImageTypeEnum
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Subtype.
     *
     * @return string|null
     * @see AdImageSubtypeEnum
     */
    public function getSubtype()
    {
        return $this->Subtype;
    }

    /**
     * Sets Subtype.
     *
     * @param string|null $value
     * @return self
     * @see AdImageSubtypeEnum
     */
    public function setSubtype($value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Gets OriginalUrl.
     *
     * @return string|null
     */
    public function getOriginalUrl()
    {
        return $this->OriginalUrl;
    }

    /**
     * Sets OriginalUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setOriginalUrl($value = null)
    {
        $this->OriginalUrl = $value;

        return $this;
    }

    /**
     * Gets PreviewUrl.
     *
     * @return string|null
     */
    public function getPreviewUrl()
    {
        return $this->PreviewUrl;
    }

    /**
     * Sets PreviewUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setPreviewUrl($value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }


}

