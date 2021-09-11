<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetRequestGeneral
{
//    Can be omit.
//    protected $Page = null;

    /**
     * Creates a new instance of GetRequestGeneral.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Page.
     */
    public function getPage(): ?LimitOffset
    {
        return $this->Page ?? null;
    }

    /**
     * Sets Page.
     *
     * @return $this
     */
    public function setPage(?LimitOffset $value = null)
    {
        $this->Page = $value;

        return $this;
    }
}
