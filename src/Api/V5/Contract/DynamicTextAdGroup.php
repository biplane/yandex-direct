<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGroup extends DynamicAdGroup
{
    protected $DomainUrl = null;

    public function getDomainUrl(): string
    {
        return $this->DomainUrl;
    }

    /**
     * @return $this
     */
    public function setDomainUrl(string $value)
    {
        $this->DomainUrl = $value;

        return $this;
    }
}
