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
    /** @var string */
    protected $Type;

    /** @var string */
    protected $Text;

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
     * Get Type
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Text
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * Set Text
     *
     * @return $this
     */
    public function setText(string $value)
    {
        $this->Text = $value;

        return $this;
    }
}
