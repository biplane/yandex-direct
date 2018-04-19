<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddSitelinksRequest
{

    protected $SitelinksSets = [];

    /**
     * Creates a new instance of AddSitelinksRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SitelinksSets.
     *
     * @return SitelinksSetAddItem[]
     */
    public function getSitelinksSets()
    {
        return $this->SitelinksSets;
    }

    /**
     * Sets SitelinksSets.
     *
     * @param SitelinksSetAddItem[] $value
     * @return $this
     */
    public function setSitelinksSets(array $value)
    {
        $this->SitelinksSets = $value;

        return $this;
    }


}

