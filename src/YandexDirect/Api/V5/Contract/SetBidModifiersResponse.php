<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidModifiersResponse
{

    protected $SetResults = null;

    /**
     * Creates a new instance of SetBidModifiersResponse.
     *
     * @return SetBidModifiersResponse
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
        return $this->SetResults;
    }

    /**
     * Sets SetResults.
     *
     * @param ActionResult[]|null $value
     * @return $this
     */
    public function setSetResults(array $value = null)
    {
        $this->SetResults = $value;

        return $this;
    }


}

