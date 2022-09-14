<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetSitelinksResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $SitelinksSets = null;

    /**
     * @return SitelinksSetGetItem[]|null
     */
    public function getSitelinksSets(): ?array
    {
        return $this->SitelinksSets ?? null;
    }

    /**
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
