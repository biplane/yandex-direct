<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAudienceTargetsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $AudienceTargets = null;

    /**
     * Creates a new instance of GetAudienceTargetsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AudienceTargets.
     *
     * @return AudienceTargetGetItem[]|null
     */
    public function getAudienceTargets()
    {
        return isset($this->AudienceTargets) ? $this->AudienceTargets : null;
    }

    /**
     * Sets AudienceTargets.
     *
     * @param AudienceTargetGetItem[]|null $value
     * @return $this
     */
    public function setAudienceTargets(array $value = null)
    {
        $this->AudienceTargets = $value;

        return $this;
    }


}

