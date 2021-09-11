<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SupplySidePlatformsItem
{
    protected $Title = null;

    /**
     * Creates a new instance of SupplySidePlatformsItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Title.
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }
}
