<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionSettingItem
{

    protected $AdExtensionId = null;

    protected $Operation = null;

    /**
     * Creates a new instance of AdExtensionSettingItem.
     *
     * @return AdExtensionSettingItem
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
     * Gets Operation.
     *
     * @return OperationEnum
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * Sets Operation.
     *
     * @param OperationEnum $value
     * @return $this
     */
    public function setOperation($value)
    {
        $this->Operation = $value;

        return $this;
    }


}

