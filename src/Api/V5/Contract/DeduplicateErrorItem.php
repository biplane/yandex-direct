<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateErrorItem extends ActionResult
{
    protected $Position = null;

    /**
     * Creates a new instance of DeduplicateErrorItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Position.
     */
    public function getPosition(): int
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @return $this
     */
    public function setPosition(int $value)
    {
        $this->Position = $value;

        return $this;
    }
}
