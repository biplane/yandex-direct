<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendKeywordsResponse
{

    protected $SuspendResults = array(
        
    );

    /**
     * Creates a new instance of SuspendKeywordsResponse.
     *
     * @return SuspendKeywordsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SuspendResults.
     *
     * @return ActionResult[]
     */
    public function getSuspendResults()
    {
        return $this->SuspendResults;
    }

    /**
     * Sets SuspendResults.
     *
     * @param ActionResult[] $value
     * @return $this
     */
    public function setSuspendResults(array $value)
    {
        $this->SuspendResults = $value;

        return $this;
    }


}

