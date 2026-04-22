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
    /** @var AdImageHashesCriteria */
    protected $SelectionCriteria;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): AdImageHashesCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(AdImageHashesCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
