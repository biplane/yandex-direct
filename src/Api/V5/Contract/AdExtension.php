<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtension extends AdExtensionBase
{

//    Can be omit.
//    protected $AdExtensionId = null;

    /**
     * Creates a new instance of AdExtension.
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
     * @return int|null
     */
    public function getAdExtensionId()
    {
        return isset($this->AdExtensionId) ? $this->AdExtensionId : null;
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

