<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetResponseGeneral
{
//    Can be omitted.
//    protected $LimitedBy = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLimitedBy(): ?int
    {
        return $this->LimitedBy ?? null;
    }

    /**
     * @return $this
     */
    public function setLimitedBy(?int $value = null)
    {
        $this->LimitedBy = $value;

        return $this;
    }
}
