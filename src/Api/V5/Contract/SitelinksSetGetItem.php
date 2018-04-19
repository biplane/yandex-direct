<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinksSetGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Sitelinks = null;

    /**
     * Creates a new instance of SitelinksSetGetItem.
     *
     * @return self
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
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return self
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
        return isset($this->Sitelinks) ? $this->Sitelinks : null;
    }

    /**
     * Sets Sitelinks.
     *
     * @param Sitelink[]|null $value
     * @return self
     */
    public function setSitelinks(array $value = null)
    {
        $this->Sitelinks = $value;

        return $this;
    }


}

