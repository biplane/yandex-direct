<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextAdGet extends TextAdGetBase
{
//    Can be omitted.
//    protected $Text = null;

    public function getText(): ?string
    {
        return $this->Text ?? null;
    }

    /**
     * @return $this
     */
    public function setText(?string $value = null)
    {
        $this->Text = $value;

        return $this;
    }
}
