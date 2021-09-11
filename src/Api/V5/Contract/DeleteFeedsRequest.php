<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteFeedsRequest
{
    protected $SelectionCriteria = null;

    /**
     * Creates a new instance of DeleteFeedsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): FeedsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(FeedsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
