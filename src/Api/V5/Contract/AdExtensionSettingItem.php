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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAdExtensionId(): int
    {
        return $this->AdExtensionId;
    }

    /**
     * @return $this
     */
    public function setAdExtensionId(int $value)
    {
        $this->AdExtensionId = $value;

        return $this;
    }

    /**
     * @see OperationEnum
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }

    /**
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
