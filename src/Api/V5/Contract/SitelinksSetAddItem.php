<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinksSetAddItem
{

    protected $Sitelinks = [];

    /**
     * Creates a new instance of SitelinksSetAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Sitelinks.
     *
     * @return SitelinkAddItem[]
     */
    public function getSitelinks()
    {
        return $this->Sitelinks;
    }

    /**
     * Sets Sitelinks.
     *
     * @param SitelinkAddItem[] $value
     * @return $this
     */
    public function setSitelinks(array $value)
    {
        $this->Sitelinks = $value;

        return $this;
    }


}

