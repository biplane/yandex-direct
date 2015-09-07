<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinksSetGetItem
{

    protected $Id = null;

    protected $Sitelinks = null;

    /**
     * Creates a new instance of SitelinksSetGetItem.
     *
     * @return SitelinksSetGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Sitelinks.
     *
     * @return Sitelink[]|null
     */
    public function getSitelinks()
    {
        return $this->Sitelinks;
    }

    /**
     * Sets Sitelinks.
     *
     * @param Sitelink[]|null $value
     * @return $this
     */
    public function setSitelinks(array $value = null)
    {
        $this->Sitelinks = $value;

        return $this;
    }


}

