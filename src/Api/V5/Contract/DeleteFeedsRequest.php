<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteFeedsRequest
{

    protected $SelectionCriteria = null;

    /**
     * Creates a new instance of DeleteFeedsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return FeedsSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param FeedsSelectionCriteria $value
     * @return $this
     */
    public function setSelectionCriteria(FeedsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }


}

