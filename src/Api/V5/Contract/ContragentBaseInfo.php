<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContragentBaseInfo
{
//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $Phone = null;

//    Can be omitted.
//    protected $EpayNumber = null;

//    Can be omitted.
//    protected $RegNumber = null;

//    Can be omitted.
//    protected $OksmNumber = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->Phone ?? null;
    }

    /**
     * @return $this
     */
    public function setPhone(?string $value = null)
    {
        $this->Phone = $value;

        return $this;
    }

    public function getEpayNumber(): ?string
    {
        return $this->EpayNumber ?? null;
    }

    /**
     * @return $this
     */
    public function setEpayNumber(?string $value = null)
    {
        $this->EpayNumber = $value;

        return $this;
    }

    public function getRegNumber(): ?string
    {
        return $this->RegNumber ?? null;
    }

    /**
     * @return $this
     */
    public function setRegNumber(?string $value = null)
    {
        $this->RegNumber = $value;

        return $this;
    }

    public function getOksmNumber(): ?string
    {
        return $this->OksmNumber ?? null;
    }

    /**
     * @return $this
     */
    public function setOksmNumber(?string $value = null)
    {
        $this->OksmNumber = $value;

        return $this;
    }
}
