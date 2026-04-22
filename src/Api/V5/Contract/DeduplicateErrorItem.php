<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeduplicateErrorItem extends ActionResult
{
    /** @var int */
    protected $Position;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Position
     */
    public function getPosition(): int
    {
        return $this->Position;
    }

    /**
     * Set Position
     *
     * @return $this
     */
    public function setPosition(int $value)
    {
        $this->Position = $value;

        return $this;
    }
}
