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
     * @return self
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
     * @return self
     */
    public function setAdExtensionId($value)
    {
        $this->AdExtensionId = $value;

        return $this;
    }

    /**
     * Gets Operation.
     *
     * @return string
     * @see OperationEnum
     */
    public function getOperation()
    {
        return $this->Operation;
    }

    /**
     * Sets Operation.
     *
     * @param string $value
     * @return self
     * @see OperationEnum
     */
    public function setOperation($value)
    {
        $this->Operation = $value;

        return $this;
    }


}

