<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddSmartAdTargetsRequest
{

    protected $SmartAdTargets = [];

    /**
     * Creates a new instance of AddSmartAdTargetsRequest.
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
     * @return SmartAdTargetAddItem[]
     */
    public function getSmartAdTargets()
    {
        return $this->SmartAdTargets;
    }

    /**
     * Sets SmartAdTargets.
     *
     * @param SmartAdTargetAddItem[] $value
     * @return $this
     */
    public function setSmartAdTargets(array $value)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }


}

