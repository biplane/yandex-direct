<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RejectReason
{
    protected $Type = null;

    protected $Text = null;

    /**
     * Creates a new instance of RejectReason.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Type.
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
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
