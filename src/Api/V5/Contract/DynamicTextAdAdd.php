<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
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
