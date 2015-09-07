<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinksSetAddItem
{

    protected $Sitelinks = array(
        
    );

    /**
     * Creates a new instance of SitelinksSetAddItem.
     *
     * @return SitelinksSetAddItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Sitelinks.
     *
     * @return Sitelink[]
     */
    public function getSitelinks()
    {
        return $this->Sitelinks;
    }

    /**
     * Sets Sitelinks.
     *
     * @param Sitelink[] $value
     * @return $this
     */
    public function setSitelinks(array $value)
    {
        $this->Sitelinks = $value;

        return $this;
    }


}

