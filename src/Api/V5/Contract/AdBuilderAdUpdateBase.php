<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdUpdateBase
{

    protected $Creative = null;

    /**
     * Creates a new instance of AdBuilderAdUpdateBase.
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
     * @return AdBuilderAdUpdateItem|null
     */
    public function getCreative()
    {
        return $this->Creative;
    }

    /**
     * Sets Creative.
     *
     * @param AdBuilderAdUpdateItem|null $value
     * @return self
     */
    public function setCreative(AdBuilderAdUpdateItem $value = null)
    {
        $this->Creative = $value;

        return $this;
    }


}

