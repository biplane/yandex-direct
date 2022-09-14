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
//    protected $TinInfo = null;

    public function getTinInfo(): ?TinInfoGet
    {
        return $this->TinInfo ?? null;
    }

    /**
     * @return $this
     */
    public function setTinInfo(?TinInfoGet $value = null)
    {
        $this->TinInfo = $value;

        return $this;
    }
}
