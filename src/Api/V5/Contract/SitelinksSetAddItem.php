<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SitelinksSetAddItem
{
    protected $Sitelinks = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SitelinkAddItem[]
     */
    public function getSitelinks(): array
    {
        return $this->Sitelinks;
    }

    /**
     * @param SitelinkAddItem[] $value
     *
     * @return $this
     */
    public function setSitelinks(array $value)
    {
        $this->Sitelinks = $value;

        return $this;
    }
}
