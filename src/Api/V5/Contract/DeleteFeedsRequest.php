<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeleteFeedsRequest
{
    protected $SelectionCriteria = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSelectionCriteria(): FeedsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(FeedsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
