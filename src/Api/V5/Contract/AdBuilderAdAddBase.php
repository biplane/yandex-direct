<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdAddBase
{

    protected $Creative = null;

    /**
     * Creates a new instance of AdBuilderAdAddBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Creative.
     *
     * @return AdBuilderAdAddItem
     */
    public function getCreative()
    {
        return $this->Creative;
    }

    /**
     * Sets Creative.
     *
     * @param AdBuilderAdAddItem $value
     * @return self
     */
    public function setCreative(AdBuilderAdAddItem $value)
    {
        $this->Creative = $value;

        return $this;
    }


}

