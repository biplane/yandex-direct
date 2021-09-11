<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdAdd extends TextAdAddBase
{
    protected $Text = null;

    /**
     * Creates a new instance of DynamicTextAdAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Text.
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * Sets Text.
     *
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }
}
