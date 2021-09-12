<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SitelinksSetGetItem
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Sitelinks = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * @return SitelinkGetItem[]|null
     */
    public function getSitelinks(): ?array
    {
        return $this->Sitelinks ?? null;
    }

    /**
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
