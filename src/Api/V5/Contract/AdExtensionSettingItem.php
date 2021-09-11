<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdExtensionSettingItem
{
    protected $AdExtensionId = null;

    protected $Operation = null;

    /**
     * Creates a new instance of AdExtensionSettingItem.
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
     * Gets Operation.
     *
     * @see OperationEnum
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }

    /**
     * Sets Operation.
     *
     * @see OperationEnum
     *
     * @return $this
     */
    public function setOperation(string $value)
    {
        $this->Operation = $value;

        return $this;
    }
}
