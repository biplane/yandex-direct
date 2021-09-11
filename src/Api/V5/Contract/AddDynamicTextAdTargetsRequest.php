<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddDynamicTextAdTargetsRequest
{
    protected $Webpages = [];

    /**
     * Creates a new instance of AddDynamicTextAdTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Webpages.
     *
     * @return WebpageAddItem[]
     */
    public function getWebpages(): array
    {
        return $this->Webpages;
    }

    /**
     * Sets Webpages.
     *
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
