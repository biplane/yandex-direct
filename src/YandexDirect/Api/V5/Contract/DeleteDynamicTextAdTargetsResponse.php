<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteDynamicTextAdTargetsResponse
{

    protected $DeleteResults = array(
        
    );

    /**
     * Creates a new instance of DeleteDynamicTextAdTargetsResponse.
     *
     * @return DeleteDynamicTextAdTargetsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets DeleteResults.
     *
     * @return ActionResult[]
     */
    public function getDeleteResults()
    {
        return $this->DeleteResults;
    }

    /**
     * Sets DeleteResults.
     *
     * @param ActionResult[] $value
     * @return $this
     */
    public function setDeleteResults(array $value)
    {
        $this->DeleteResults = $value;

        return $this;
    }


}

