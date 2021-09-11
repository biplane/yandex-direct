<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendAdsRequest
{
    protected $SelectionCriteria = null;

    /**
     * Creates a new instance of SuspendAdsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): IdsCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(IdsCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
