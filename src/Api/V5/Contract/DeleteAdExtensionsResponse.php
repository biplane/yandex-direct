<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdExtensionsResponse
{

//    Can be omit.
//    protected $DeleteResults = null;

    /**
     * Creates a new instance of DeleteAdExtensionsResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets DeleteResults.
     *
     * @return ActionResult[]|null
     */
    public function getDeleteResults()
    {
        return isset($this->DeleteResults) ? $this->DeleteResults : null;
    }

    /**
     * Sets DeleteResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setDeleteResults(array $value = null)
    {
        $this->DeleteResults = $value;

        return $this;
    }


}

