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
     * @see AdExtensionTypeEnum
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
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
