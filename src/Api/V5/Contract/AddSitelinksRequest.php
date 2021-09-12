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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SitelinksSetAddItem[]
     */
    public function getSitelinksSets(): array
    {
        return $this->SitelinksSets;
    }

    /**
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
