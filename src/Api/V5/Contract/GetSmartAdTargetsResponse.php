<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetSmartAdTargetsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $SmartAdTargets = null;

    /**
     * Creates a new instance of GetSmartAdTargetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SmartAdTargets.
     *
     * @return SmartAdTargetGetItem[]|null
     */
    public function getSmartAdTargets()
    {
        return isset($this->SmartAdTargets) ? $this->SmartAdTargets : null;
    }

    /**
     * Sets SmartAdTargets.
     *
     * @param SmartAdTargetGetItem[]|null $value
     * @return $this
     */
    public function setSmartAdTargets(array $value = null)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }


}

