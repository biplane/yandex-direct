<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdAddBase
{

//    Can be omit.
//    protected $VCardId = null;

//    Can be omit.
//    protected $AdImageHash = null;

//    Can be omit.
//    protected $SitelinkSetId = null;

//    Can be omit.
//    protected $AdExtensionIds = null;

    /**
     * Creates a new instance of TextAdAddBase.
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
        return isset($this->AdImageHash) ? $this->AdImageHash : null;
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
        return isset($this->SitelinkSetId) ? $this->SitelinkSetId : null;
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
     * Gets AdExtensionIds.
     *
     * @return int[]|null
     */
    public function getAdExtensionIds()
    {
        return isset($this->AdExtensionIds) ? $this->AdExtensionIds : null;
    }

    /**
     * Sets AdExtensionIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setAdExtensionIds(array $value = null)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }


}

