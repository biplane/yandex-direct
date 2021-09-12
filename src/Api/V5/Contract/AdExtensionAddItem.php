<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionAddItem
{
//    Can be omitted.
//    protected $Callout = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCallout(): ?Callout
    {
        return $this->Callout ?? null;
    }

    /**
     * @return $this
     */
    public function setCallout(?Callout $value = null)
    {
        $this->Callout = $value;

        return $this;
    }
}
