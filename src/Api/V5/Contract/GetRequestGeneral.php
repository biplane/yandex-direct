<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetRequestGeneral
{
//    Can be omitted.
//    protected $Page = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPage(): ?LimitOffset
    {
        return $this->Page ?? null;
    }

    /**
     * @return $this
     */
    public function setPage(?LimitOffset $value = null)
    {
        $this->Page = $value;

        return $this;
    }
}
