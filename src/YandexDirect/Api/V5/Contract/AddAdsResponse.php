<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAdsResponse
{

    protected $AddResults = null;

    /**
     * Creates a new instance of AddAdsResponse.
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
     * @return ActionResult[]|null
     */
    public function getAddResults()
    {
        return $this->AddResults;
    }

    /**
     * Sets AddResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setAddResults(array $value = null)
    {
        $this->AddResults = $value;

        return $this;
    }


}

