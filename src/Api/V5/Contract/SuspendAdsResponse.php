<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendAdsResponse
{

//    Can be omit.
//    protected $SuspendResults = null;

    /**
     * Creates a new instance of SuspendAdsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SuspendResults.
     *
     * @return ActionResult[]|null
     */
    public function getSuspendResults()
    {
        return isset($this->SuspendResults) ? $this->SuspendResults : null;
    }

    /**
     * Sets SuspendResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setSuspendResults(array $value = null)
    {
        $this->SuspendResults = $value;

        return $this;
    }


}

