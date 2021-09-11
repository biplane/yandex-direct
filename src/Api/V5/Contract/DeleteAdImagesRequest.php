<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeleteAdImagesRequest
{
    protected $SelectionCriteria = null;

    /**
     * Creates a new instance of DeleteAdImagesRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): AdImageHashesCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(AdImageHashesCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
