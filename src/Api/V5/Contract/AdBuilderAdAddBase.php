<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdBuilderAdAddBase
{
    protected $Creative = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCreative(): AdBuilderAdAddItem
    {
        return $this->Creative;
    }

    /**
     * @return $this
     */
    public function setCreative(AdBuilderAdAddItem $value)
    {
        $this->Creative = $value;

        return $this;
    }
}
