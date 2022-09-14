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
//    protected $TinInfo = null;

    public function getTinInfo(): ?TinInfoUpdate
    {
        return $this->TinInfo ?? null;
    }

    /**
     * @return $this
     */
    public function setTinInfo(?TinInfoUpdate $value = null)
    {
        $this->TinInfo = $value;

        return $this;
    }
}
