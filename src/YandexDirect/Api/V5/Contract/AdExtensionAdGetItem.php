<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionAdGetItem
{

    protected $AdExtensionId = null;

    protected $Type = null;

    /**
     * Creates a new instance of AdExtensionAdGetItem.
     *
     * @return AdExtensionAdGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdExtensionId.
     *
     * @return int
     */
    public function getAdExtensionId()
    {
        return $this->AdExtensionId;
    }

    /**
     * Sets AdExtensionId.
     *
     * @param int $value
     * @return $this
     */
    public function setAdExtensionId($value)
    {
        $this->AdExtensionId = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return AdExtensionTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param AdExtensionTypeEnum $value
     * @return $this
     */
    public function setType(AdExtensionTypeEnum $value)
    {
        $this->Type = $value;

        return $this;
    }


}

