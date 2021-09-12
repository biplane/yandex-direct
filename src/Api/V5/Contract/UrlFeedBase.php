<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UrlFeedBase
{
//    Can be omitted.
//    protected $RemoveUtmTags = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see YesNoEnum
     */
    public function getRemoveUtmTags(): ?string
    {
        return $this->RemoveUtmTags ?? null;
    }

    /**
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
