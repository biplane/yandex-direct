<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateSmartAdTargetsRequest
{

    protected $SmartAdTargets = [];

    /**
     * Creates a new instance of UpdateSmartAdTargetsRequest.
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
     * @return SmartAdTargetUpdateItem[]
     */
    public function getSmartAdTargets()
    {
        return $this->SmartAdTargets;
    }

    /**
     * Sets SmartAdTargets.
     *
     * @param SmartAdTargetUpdateItem[] $value
     * @return $this
     */
    public function setSmartAdTargets(array $value)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }


}

