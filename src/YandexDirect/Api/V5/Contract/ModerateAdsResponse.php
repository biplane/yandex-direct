<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ModerateAdsResponse
{

    protected $ModerateResults = null;

    /**
     * Creates a new instance of ModerateAdsResponse.
     *
     * @return ModerateAdsResponse
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
        return $this->ModerateResults;
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

