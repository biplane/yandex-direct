<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGetBase
{

    protected $VCardId = null;

    protected $AdImageHash = null;

    protected $SitelinkSetId = null;

    protected $VCardModeration = null;

    protected $SitelinksModeration = null;

    protected $AdImageModeration = null;

    protected $AdExtensions = null;

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
        return $this->VCardId;
    }

    /**
     * Sets VCardId.
     *
     * @param int|null $value
     * @return self
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
     * Gets SitelinkSetId.
     *
     * @return int|null
     */
    public function getSitelinkSetId()
    {
        return $this->SitelinkSetId;
    }

    /**
     * Sets SitelinkSetId.
     *
     * @param int|null $value
     * @return self
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
        return $this->VCardModeration;
    }

    /**
     * Sets VCardModeration.
     *
     * @param ExtensionModeration|null $value
     * @return self
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
        return $this->SitelinksModeration;
    }

    /**
     * Sets SitelinksModeration.
     *
     * @param ExtensionModeration|null $value
     * @return self
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
        return $this->AdImageModeration;
    }

    /**
     * Sets AdImageModeration.
     *
     * @param ExtensionModeration|null $value
     * @return self
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
        return $this->AdExtensions;
    }

    /**
     * Sets AdExtensions.
     *
     * @param AdExtensionAdGetItem[]|null $value
     * @return self
     */
    public function setAdExtensions(array $value = null)
    {
        $this->AdExtensions = $value;

        return $this;
    }


}

