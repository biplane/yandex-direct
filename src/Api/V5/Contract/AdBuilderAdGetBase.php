<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdGetBase
{
//    Can be omit.
//    protected $Creative = null;

    /**
     * Creates a new instance of AdBuilderAdGetBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Creative.
     */
    public function getCreative(): ?AdBuilderAdGetItem
    {
        return $this->Creative ?? null;
    }

    /**
     * Sets Creative.
     *
     * @return $this
     */
    public function setCreative(?AdBuilderAdGetItem $value = null)
    {
        $this->Creative = $value;

        return $this;
    }
}
