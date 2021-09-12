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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTagID(): int
    {
        return $this->TagID;
    }

    /**
     * @return $this
     */
    public function setTagID(int $value)
    {
        $this->TagID = $value;

        return $this;
    }

    public function getTag(): string
    {
        return $this->Tag;
    }

    /**
     * @return $this
     */
    public function setTag(string $value)
    {
        $this->Tag = $value;

        return $this;
    }
}
