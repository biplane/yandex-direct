<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdImagesResponse
{

//    Can be omit.
//    protected $DeleteResults = null;

    /**
     * Creates a new instance of DeleteAdImagesResponse.
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
     * @return AdImageActionResult[]|null
     */
    public function getDeleteResults()
    {
        return isset($this->DeleteResults) ? $this->DeleteResults : null;
    }

    /**
     * Sets DeleteResults.
     *
     * @param AdImageActionResult[]|null $value
     * @return self
     */
    public function setDeleteResults(array $value = null)
    {
        $this->DeleteResults = $value;

        return $this;
    }


}

