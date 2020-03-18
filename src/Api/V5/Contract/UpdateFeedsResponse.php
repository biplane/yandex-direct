<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateFeedsResponse
{

    protected $UpdateResults = [];

    /**
     * Creates a new instance of UpdateFeedsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets UpdateResults.
     *
     * @return ActionResult[]
     */
    public function getUpdateResults()
    {
        return $this->UpdateResults;
    }

    /**
     * Sets UpdateResults.
     *
     * @param ActionResult[] $value
     * @return $this
     */
    public function setUpdateResults(array $value)
    {
        $this->UpdateResults = $value;

        return $this;
    }


}

