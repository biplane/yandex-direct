<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextAdGet extends TextAdGetBase
{
//    Can be omitted.
//    protected $Text;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Text
     */
    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * Set Text
     *
     * @return $this
     */
    public function setText(?string $value)
    {
        $this->Text = $value;

        return $this;
    }
}
