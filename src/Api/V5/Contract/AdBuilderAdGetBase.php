<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdBuilderAdGetBase
{
//    Can be omitted.
//    protected $Creative = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCreative(): ?AdBuilderAdGetItem
    {
        return $this->Creative ?? null;
    }

    /**
     * @return $this
     */
    public function setCreative(?AdBuilderAdGetItem $value = null)
    {
        $this->Creative = $value;

        return $this;
    }
}
