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
//    protected $Page;

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
     * Get Page
     */
    public function getPage(): ?LimitOffset
    {
        return $this->Page ?? null;
    }

    /**
     * Set Page
     *
     * @return $this
     */
    public function setPage(?LimitOffset $value)
    {
        $this->Page = $value;

        return $this;
    }
}
