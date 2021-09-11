<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UrlFeedBase
{
//    Can be omit.
//    protected $RemoveUtmTags = null;

    /**
     * Creates a new instance of UrlFeedBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RemoveUtmTags.
     *
     * @see YesNoEnum
     */
    public function getRemoveUtmTags(): ?string
    {
        return $this->RemoveUtmTags ?? null;
    }

    /**
     * Sets RemoveUtmTags.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setRemoveUtmTags(?string $value = null)
    {
        $this->RemoveUtmTags = $value;

        return $this;
    }
}
