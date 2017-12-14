<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdGetBase
{

    protected $Creative = null;

    /**
     * Creates a new instance of AdBuilderAdGetBase.
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
     * @return AdBuilderAdGetItem|null
     */
    public function getCreative()
    {
        return $this->Creative;
    }

    /**
     * Sets Creative.
     *
     * @param AdBuilderAdGetItem|null $value
     * @return self
     */
    public function setCreative(AdBuilderAdGetItem $value = null)
    {
        $this->Creative = $value;

        return $this;
    }


}

