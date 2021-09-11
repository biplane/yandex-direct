<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDynamicTextAdTargetsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Webpages = null;

    /**
     * Creates a new instance of GetDynamicTextAdTargetsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Webpages.
     *
     * @return WebpageGetItem[]|null
     */
    public function getWebpages(): ?array
    {
        return $this->Webpages ?? null;
    }

    /**
     * Sets Webpages.
     *
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
