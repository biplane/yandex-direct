<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGroup
{
    protected $DomainUrl = null;

    /**
     * Creates a new instance of DynamicTextAdGroup.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets DomainUrl.
     */
    public function getDomainUrl(): string
    {
        return $this->DomainUrl;
    }

    /**
     * Sets DomainUrl.
     *
     * @return $this
     */
    public function setDomainUrl(string $value)
    {
        $this->DomainUrl = $value;

        return $this;
    }
}
