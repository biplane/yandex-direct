<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdExtensions;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\IdsCriteria;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeleteRequest
{
    /** @var IdsCriteria */
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
    public function getSelectionCriteria(): IdsCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(IdsCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }
}
