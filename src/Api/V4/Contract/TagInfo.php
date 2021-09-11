<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TagInfo
{
    protected $TagID = null;

    protected $Tag = null;

    /**
     * Creates a new instance of TagInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TagID.
     */
    public function getTagID(): int
    {
        return $this->TagID;
    }

    /**
     * Sets TagID.
     *
     * @return $this
     */
    public function setTagID(int $value)
    {
        $this->TagID = $value;

        return $this;
    }

    /**
     * Gets Tag.
     */
    public function getTag(): string
    {
        return $this->Tag;
    }

    /**
     * Sets Tag.
     *
     * @return $this
     */
    public function setTag(string $value)
    {
        $this->Tag = $value;

        return $this;
    }
}
