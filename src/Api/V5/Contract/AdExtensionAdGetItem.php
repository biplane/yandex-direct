<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdExtensionAdGetItem
{
    /** @var int */
    protected $AdExtensionId;

    /** @var 'CALLOUT'|'UNKNOWN' */
    protected $Type;

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
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum
     *
     * @return 'CALLOUT'|'UNKNOWN'
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum
     *
     * @param 'CALLOUT'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }
}
