<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdAddItemBase
{

    protected $AdGroupId = null;

    /**
     * Creates a new instance of AdAddItemBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AdGroupId.
     *
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int $value
     * @return self
     */
    public function setAdGroupId($value)
    {
        $this->AdGroupId = $value;

        return $this;
    }


}

