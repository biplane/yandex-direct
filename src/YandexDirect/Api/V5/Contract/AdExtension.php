<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtension extends AdExtensionBase
{

    protected $AdExtensionId = null;

    /**
     * Creates a new instance of AdExtension.
     *
     * @return AdExtension
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdExtensionId.
     *
     * @return int|null
     */
    public function getAdExtensionId()
    {
        return $this->AdExtensionId;
    }

    /**
     * Sets AdExtensionId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdExtensionId($value = null)
    {
        $this->AdExtensionId = $value;

        return $this;
    }


}

