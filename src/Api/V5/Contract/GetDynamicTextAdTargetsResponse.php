<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetDynamicTextAdTargetsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Webpages = null;

    /**
     * @return WebpageGetItem[]|null
     */
    public function getWebpages(): ?array
    {
        return $this->Webpages ?? null;
    }

    /**
     * @param WebpageGetItem[]|null $value
     *
     * @return $this
     */
    public function setWebpages(?array $value = null)
    {
        $this->Webpages = $value;

        return $this;
    }
}
