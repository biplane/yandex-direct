<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContragentInfoGet extends ContragentBaseInfo
{
//    Can be omitted.
//    protected $TinInfo;

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
     * Get TinInfo
     */
    public function getTinInfo(): ?TinInfoGet
    {
        return $this->TinInfo ?? null;
    }

    /**
     * Set TinInfo
     *
     * @return $this
     */
    public function setTinInfo(?TinInfoGet $value)
    {
        $this->TinInfo = $value;

        return $this;
    }
}
