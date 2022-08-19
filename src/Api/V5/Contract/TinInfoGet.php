<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TinInfoGet
{
//    Can be omitted.
//    protected $TinType = null;

//    Can be omitted.
//    protected $Tin = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see TinTypeEnum
     */
    public function getTinType(): ?string
    {
        return $this->TinType ?? null;
    }

    /**
     * @see TinTypeEnum
     *
     * @return $this
     */
    public function setTinType(?string $value = null)
    {
        $this->TinType = $value;

        return $this;
    }

    public function getTin(): ?string
    {
        return $this->Tin ?? null;
    }

    /**
     * @return $this
     */
    public function setTin(?string $value = null)
    {
        $this->Tin = $value;

        return $this;
    }
}
