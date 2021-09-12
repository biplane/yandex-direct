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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

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
