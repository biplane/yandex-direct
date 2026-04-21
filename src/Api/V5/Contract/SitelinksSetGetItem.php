<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SitelinksSetGetItem
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Sitelinks;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Sitelinks
     *
     * @return list<SitelinkGetItem>
     */
    public function getSitelinks(): array
    {
        return $this->Sitelinks ?? [];
    }

    /**
     * Set Sitelinks
     *
     * @param list<SitelinkGetItem> $value
     *
     * @return $this
     */
    public function setSitelinks(array $value)
    {
        $this->Sitelinks = $value;

        return $this;
    }
}
