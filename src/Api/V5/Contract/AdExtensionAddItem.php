<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtensionAddItem
{
//    Can be omitted.
//    protected $Callout;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Callout
     */
    public function getCallout(): ?Callout
    {
        return $this->Callout ?? null;
    }

    /**
     * Set Callout
     *
     * @return $this
     */
    public function setCallout(?Callout $value)
    {
        $this->Callout = $value;

        return $this;
    }
}
