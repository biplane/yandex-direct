<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdBuilderAdUpdateItem
{
    protected $CreativeId = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCreativeId(): int
    {
        return $this->CreativeId;
    }

    /**
     * @return $this
     */
    public function setCreativeId(int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }
}
