<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtensionSettingItem
{
    /** @var int */
    protected $AdExtensionId;

    /** @var 'ADD'|'REMOVE'|'SET' */
    protected $Operation;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get AdExtensionId
     */
    public function getAdExtensionId(): int
    {
        return $this->AdExtensionId;
    }

    /**
     * Set AdExtensionId
     *
     * @return $this
     */
    public function setAdExtensionId(int $value)
    {
        $this->AdExtensionId = $value;

        return $this;
    }

    /**
     * Get Operation
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\OperationEnum
     *
     * @return 'ADD'|'REMOVE'|'SET'
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }

    /**
     * Set Operation
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\OperationEnum
     *
     * @param 'ADD'|'REMOVE'|'SET' $value
     *
     * @return $this
     */
    public function setOperation(string $value)
    {
        $this->Operation = $value;

        return $this;
    }
}
