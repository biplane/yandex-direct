<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Sitelinks.
     *
     * @return SitelinkGetItem[]|null
     */
    public function getSitelinks(): ?array
    {
        return $this->Sitelinks ?? null;
    }

    /**
     * Sets Sitelinks.
     *
     * @param SitelinkGetItem[]|null $value
     *
     * @return $this
     */
    public function setSitelinks(?array $value = null)
    {
        $this->Sitelinks = $value;

        return $this;
    }
}
