<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionAdGetItem
{
    protected $AdExtensionId = null;

    protected $Type = null;

    /**
     * Creates a new instance of AdExtensionAdGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AdExtensionId.
     */
    public function getAdExtensionId(): int
    {
        return $this->AdExtensionId;
    }

    /**
     * Sets AdExtensionId.
     *
     * @return $this
     */
    public function setAdExtensionId(int $value)
    {
        $this->AdExtensionId = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @see AdExtensionTypeEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @see AdExtensionTypeEnum
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
