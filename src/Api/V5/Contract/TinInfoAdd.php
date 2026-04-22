<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TinInfoAdd
{
    /** @var 'PHYSICAL'|'FOREIGN_PHYSICAL'|'LEGAL'|'FOREIGN_LEGAL'|'INDIVIDUAL' */
    protected $TinType;

//    Can be omitted.
//    protected $Tin;

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
     * Get TinType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TinTypeEnum
     *
     * @return 'PHYSICAL'|'FOREIGN_PHYSICAL'|'LEGAL'|'FOREIGN_LEGAL'|'INDIVIDUAL'
     */
    public function getTinType(): string
    {
        return $this->TinType;
    }

    /**
     * Set TinType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TinTypeEnum
     *
     * @param 'PHYSICAL'|'FOREIGN_PHYSICAL'|'LEGAL'|'FOREIGN_LEGAL'|'INDIVIDUAL' $value
     *
     * @return $this
     */
    public function setTinType(string $value)
    {
        $this->TinType = $value;

        return $this;
    }

    /**
     * Get Tin
     */
    public function getTin(): ?string
    {
        return $this->Tin ?? null;
    }

    /**
     * Set Tin
     *
     * @return $this
     */
    public function setTin(?string $value)
    {
        $this->Tin = $value;

        return $this;
    }
}
