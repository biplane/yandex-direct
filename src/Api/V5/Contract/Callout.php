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
     * Creates a new instance of Callout.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CalloutText.
     */
    public function getCalloutText(): string
    {
        return $this->CalloutText;
    }

    /**
     * Sets CalloutText.
     *
     * @return $this
     */
    public function setCalloutText(string $value)
    {
        $this->CalloutText = $value;

        return $this;
    }
}
