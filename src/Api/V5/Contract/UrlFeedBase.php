<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UrlFeedBase
{
//    Can be omitted.
//    protected $RemoveUtmTags;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get RemoveUtmTags
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getRemoveUtmTags(): ?string
    {
        return $this->RemoveUtmTags ?? null;
    }

    /**
     * Set RemoveUtmTags
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setRemoveUtmTags(?string $value)
    {
        $this->RemoveUtmTags = $value;

        return $this;
    }
}
