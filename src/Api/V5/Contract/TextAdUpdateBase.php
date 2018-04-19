<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdUpdateBase
{

//    Can be omit.
//    protected $VCardId = null;

//    Can be omit.
//    protected $AdImageHash = null;

//    Can be omit.
//    protected $SitelinkSetId = null;

//    Can be omit.
//    protected $CalloutSetting = null;

    /**
     * Creates a new instance of TextAdUpdateBase.
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
     * Gets CalloutSetting.
     *
     * @return AdExtensionSetting|null
     */
    public function getCalloutSetting()
    {
        return isset($this->CalloutSetting) ? $this->CalloutSetting : null;
    }

    /**
     * Sets CalloutSetting.
     *
     * @param AdExtensionSetting|null $value
     * @return self
     */
    public function setCalloutSetting(AdExtensionSetting $value = null)
    {
        $this->CalloutSetting = $value;

        return $this;
    }


}

