<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdImagesResponse
{

//    Can be omit.
//    protected $AddResults = null;

    /**
     * Creates a new instance of AddAdImagesResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AddResults.
     *
     * @return AdImageActionResult[]|null
     */
    public function getAddResults()
    {
        return isset($this->AddResults) ? $this->AddResults : null;
    }

    /**
     * Sets AddResults.
     *
     * @param AdImageActionResult[]|null $value
     * @return $this
     */
    public function setAddResults(array $value = null)
    {
        $this->AddResults = $value;

        return $this;
    }


}

