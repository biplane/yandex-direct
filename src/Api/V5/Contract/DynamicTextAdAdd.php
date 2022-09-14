<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextAdAdd extends TextAdAddBase
{
    protected $Text = null;

    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }
}
