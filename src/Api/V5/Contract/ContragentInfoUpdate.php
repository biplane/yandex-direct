<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContragentInfoUpdate extends ContragentBaseInfo
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
    public function getTinInfo(): ?TinInfoUpdate
    {
        return $this->TinInfo ?? null;
    }

    /**
     * Set TinInfo
     *
     * @return $this
     */
    public function setTinInfo(?TinInfoUpdate $value)
    {
        $this->TinInfo = $value;

        return $this;
    }
}
