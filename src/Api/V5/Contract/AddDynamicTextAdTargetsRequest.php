<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddDynamicTextAdTargetsRequest
{
    protected $Webpages = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return WebpageAddItem[]
     */
    public function getWebpages(): array
    {
        return $this->Webpages;
    }

    /**
     * @param WebpageAddItem[] $value
     *
     * @return $this
     */
    public function setWebpages(array $value)
    {
        $this->Webpages = $value;

        return $this;
    }
}
