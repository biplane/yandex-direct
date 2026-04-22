<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TagInfo
{
    /** @var int */
    protected $TagID;

    /** @var string */
    protected $Tag;

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
     * Get TagID
     */
    public function getTagID(): int
    {
        return $this->TagID;
    }

    /**
     * Set TagID
     *
     * @return $this
     */
    public function setTagID(int $value)
    {
        $this->TagID = $value;

        return $this;
    }

    /**
     * Get Tag
     */
    public function getTag(): string
    {
        return $this->Tag;
    }

    /**
     * Set Tag
     *
     * @return $this
     */
    public function setTag(string $value)
    {
        $this->Tag = $value;

        return $this;
    }
}
