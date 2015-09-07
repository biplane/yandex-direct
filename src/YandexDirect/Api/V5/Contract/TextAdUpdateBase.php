<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdUpdateBase
{

    protected $VCardId = null;

    protected $AdImageHash = null;

    protected $SitelinkSetId = null;

    /**
     * Creates a new instance of TextAdUpdateBase.
     *
     * @return TextAdUpdateBase
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
        return $this->AdImageHash;
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
        return $this->SitelinkSetId;
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


}

