<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGet extends TextAdGetBase
{
//    Can be omit.
//    protected $Text = null;

    /**
     * Creates a new instance of DynamicTextAdGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Text.
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Sets Text.
     *
     * @return $this
     */
    public function setText(?string $value = null)
    {
        $this->Text = $value;

        return $this;
    }
}
