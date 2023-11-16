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

//    Can be omitted.
//    protected $ErirAdDescription = null;

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

    public function getErirAdDescription(): ?string
    {
        return $this->ErirAdDescription ?? null;
    }

    /**
     * @return $this
     */
    public function setErirAdDescription(?string $value = null)
    {
        $this->ErirAdDescription = $value;

        return $this;
    }
}
