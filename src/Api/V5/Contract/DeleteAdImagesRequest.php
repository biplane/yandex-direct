<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeleteAdImagesRequest
{
    protected $SelectionCriteria = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSelectionCriteria(): AdImageHashesCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(AdImageHashesCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
