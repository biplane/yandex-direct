<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetSitelinksResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $SitelinksSets = null;

    /**
     * Creates a new instance of GetSitelinksResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SitelinksSets.
     *
     * @return SitelinksSetGetItem[]|null
     */
    public function getSitelinksSets(): ?array
    {
        return $this->SitelinksSets ?? null;
    }

    /**
     * Sets SitelinksSets.
     *
     * @param SitelinksSetGetItem[]|null $value
     *
     * @return $this
     */
    public function setSitelinksSets(?array $value = null)
    {
        $this->SitelinksSets = $value;

        return $this;
    }
}
