<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Callout
{
    protected $CalloutText = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCalloutText(): string
    {
        return $this->CalloutText;
    }

    /**
     * @return $this
     */
    public function setCalloutText(string $value)
    {
        $this->CalloutText = $value;

        return $this;
    }
}
