<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidModifiersResponse
{

//    Can be omit.
//    protected $SetResults = null;

    /**
     * Creates a new instance of SetBidModifiersResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SetResults.
     *
     * @return ActionResult[]|null
     */
    public function getSetResults()
    {
        return isset($this->SetResults) ? $this->SetResults : null;
    }

    /**
     * Sets SetResults.
     *
     * @param ActionResult[]|null $value
     * @return self
     */
    public function setSetResults(array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }


}

