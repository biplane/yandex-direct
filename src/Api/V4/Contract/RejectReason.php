<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RejectReason
{
    protected $Type = null;

    protected $Text = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

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
