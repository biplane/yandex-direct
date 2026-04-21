<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextAdGroup extends DynamicAdGroup
{
    /** @var string */
    protected $DomainUrl;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get DomainUrl
     */
    public function getDomainUrl(): string
    {
        return $this->DomainUrl;
    }

    /**
     * Set DomainUrl
     *
     * @return $this
     */
    public function setDomainUrl(string $value)
    {
        $this->DomainUrl = $value;

        return $this;
    }
}
