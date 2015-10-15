<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ToggleBidModifiersResponse
{

    protected $ToggleResults = null;

    /**
     * Creates a new instance of ToggleBidModifiersResponse.
     *
     * @return ToggleBidModifiersResponse
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
        return $this->ToggleResults;
    }

    /**
     * Sets ToggleResults.
     *
     * @param ToggleResult[]|null $value
     * @return $this
     */
    public function setToggleResults(array $value = null)
    {
        $this->ToggleResults = $value;

        return $this;
    }


}

