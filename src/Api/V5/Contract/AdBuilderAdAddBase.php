<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdAddBase
{
    protected $Creative = null;

    /**
     * Creates a new instance of AdBuilderAdAddBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Creative.
     */
    public function getCreative(): AdBuilderAdAddItem
    {
        return $this->Creative;
    }

    /**
     * Sets Creative.
     *
     * @return $this
     */
    public function setCreative(AdBuilderAdAddItem $value)
    {
        $this->Creative = $value;

        return $this;
    }
}
