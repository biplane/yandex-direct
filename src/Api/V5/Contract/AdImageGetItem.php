<?php

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
        return isset($this->AdImageHash) ? $this->AdImageHash : null;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Associated) ? $this->Associated : null;
    }

    /**
     * Sets Associated.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Type) ? $this->Type : null;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Subtype) ? $this->Subtype : null;
    }

    /**
     * Sets Subtype.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->OriginalUrl) ? $this->OriginalUrl : null;
    }

    /**
     * Sets OriginalUrl.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->PreviewUrl) ? $this->PreviewUrl : null;
    }

    /**
     * Sets PreviewUrl.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPreviewUrl($value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }


}

