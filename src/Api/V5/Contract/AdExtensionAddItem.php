<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionAddItem
{
//    Can be omit.
//    protected $Callout = null;

    /**
     * Creates a new instance of AdExtensionAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Callout.
     */
    public function getCallout(): ?Callout
    {
        return $this->Callout ?? null;
    }

    /**
     * Sets Callout.
     *
     * @return $this
     */
    public function setCallout(?Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }
}
