<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGetBase
{

//    Can be omit.
//    protected $VCardId = null;

//    Can be omit.
//    protected $AdImageHash = null;

//    Can be omit.
//    protected $SitelinkSetId = null;

//    Can be omit.
//    protected $VCardModeration = null;

//    Can be omit.
//    protected $SitelinksModeration = null;

//    Can be omit.
//    protected $AdImageModeration = null;

//    Can be omit.
//    protected $AdExtensions = null;

    /**
     * Creates a new instance of TextAdGetBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets VCardId.
     *
     * @return int|null
     */
    public function getVCardId()
    {
        return isset($this->VCardId) ? $this->VCardId : null;
    }

    /**
     * Sets VCardId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setVCardId($value = null)
    {
        $this->VCardId = $value;

        return $this;
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
     * Gets SitelinkSetId.
     *
     * @return int|null
     */
    public function getSitelinkSetId()
    {
        return isset($this->SitelinkSetId) ? $this->SitelinkSetId : null;
    }

    /**
     * Sets SitelinkSetId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setSitelinkSetId($value = null)
    {
        $this->SitelinkSetId = $value;

        return $this;
    }

    /**
     * Gets VCardModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getVCardModeration()
    {
        return isset($this->VCardModeration) ? $this->VCardModeration : null;
    }

    /**
     * Sets VCardModeration.
     *
     * @param ExtensionModeration|null $value
     * @return $this
     */
    public function setVCardModeration(ExtensionModeration $value = null)
    {
        $this->VCardModeration = $value;

        return $this;
    }

    /**
     * Gets SitelinksModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getSitelinksModeration()
    {
        return isset($this->SitelinksModeration) ? $this->SitelinksModeration : null;
    }

    /**
     * Sets SitelinksModeration.
     *
     * @param ExtensionModeration|null $value
     * @return $this
     */
    public function setSitelinksModeration(ExtensionModeration $value = null)
    {
        $this->SitelinksModeration = $value;

        return $this;
    }

    /**
     * Gets AdImageModeration.
     *
     * @return ExtensionModeration|null
     */
    public function getAdImageModeration()
    {
        return isset($this->AdImageModeration) ? $this->AdImageModeration : null;
    }

    /**
     * Sets AdImageModeration.
     *
     * @param ExtensionModeration|null $value
     * @return $this
     */
    public function setAdImageModeration(ExtensionModeration $value = null)
    {
        $this->AdImageModeration = $value;

        return $this;
    }

    /**
     * Gets AdExtensions.
     *
     * @return AdExtensionAdGetItem[]|null
     */
    public function getAdExtensions()
    {
        return isset($this->AdExtensions) ? $this->AdExtensions : null;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionAdGetItem[]|null $value
     * @return $this
     */
    public function setAdExtensions(array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }


}

