<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ModerateAdsResponse
{

//    Can be omit.
//    protected $ModerateResults = null;

    /**
     * Creates a new instance of ModerateAdsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ModerateResults.
     *
     * @return ActionResult[]|null
     */
    public function getModerateResults()
    {
        return isset($this->ModerateResults) ? $this->ModerateResults : null;
    }

    /**
     * Sets ModerateResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setModerateResults(array $value = null)
    {
        $this->ModerateResults = $value;

        return $this;
    }


}

