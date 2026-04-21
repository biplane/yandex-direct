<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageAddItem
{
    /** @var string */
    protected $ImageData;

//    Can be omitted.
//    protected $Type;

    /** @var string */
    protected $Name;

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
     * Get ImageData
     */
    public function getImageData(): string
    {
        return $this->ImageData;
    }

    /**
     * Set ImageData
     *
     * @return $this
     */
    public function setImageData(string $value)
    {
        $this->ImageData = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdImageAddTypeEnum
     *
     * @return 'REGULAR'|'WIDE'|'FIXED_IMAGE'|'AUTO'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdImageAddTypeEnum
     *
     * @param 'REGULAR'|'WIDE'|'FIXED_IMAGE'|'AUTO'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
