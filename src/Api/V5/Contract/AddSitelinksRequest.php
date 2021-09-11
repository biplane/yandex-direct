<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddSitelinksRequest
{
    protected $SitelinksSets = [];

    /**
     * Creates a new instance of AddSitelinksRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SitelinksSets.
     *
     * @return SitelinksSetAddItem[]
     */
    public function getSitelinksSets(): array
    {
        return $this->SitelinksSets;
    }

    /**
     * Sets SitelinksSets.
     *
     * @param SitelinksSetAddItem[] $value
     *
     * @return $this
     */
    public function setSitelinksSets(array $value)
    {
        $this->SitelinksSets = $value;

        return $this;
    }
}
