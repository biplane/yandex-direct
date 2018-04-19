<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ToggleBidModifiersResponse
{

//    Can be omit.
//    protected $ToggleResults = null;

    /**
     * Creates a new instance of ToggleBidModifiersResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ToggleResults.
     *
     * @return ToggleResult[]|null
     */
    public function getToggleResults()
    {
        return isset($this->ToggleResults) ? $this->ToggleResults : null;
    }

    /**
     * Sets ToggleResults.
     *
     * @param ToggleResult[]|null $value
     * @return self
     */
    public function setToggleResults(array $value = null)
    {
        $this->ToggleResults = $value;

        return $this;
    }


}

