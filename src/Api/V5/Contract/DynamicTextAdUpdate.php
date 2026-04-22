<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextAdUpdate extends TextAdUpdateBase
{
//    Can be omitted.
//    protected $Text;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
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
