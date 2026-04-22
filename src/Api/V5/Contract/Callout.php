<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Callout
{
    /** @var string */
    protected $CalloutText;

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
     * Get CalloutText
     */
    public function getCalloutText(): string
    {
        return $this->CalloutText;
    }

    /**
     * Set CalloutText
     *
     * @return $this
     */
    public function setCalloutText(string $value)
    {
        $this->CalloutText = $value;

        return $this;
    }
}
