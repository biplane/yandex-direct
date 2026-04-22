<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class OrgInfo
{
//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $EpayNumber;

//    Can be omitted.
//    protected $RegNumber;

//    Can be omitted.
//    protected $OksmNumber;

//    Can be omitted.
//    protected $OkvedCode;

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
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get EpayNumber
     */
    public function getEpayNumber(): ?string
    {
        return $this->EpayNumber ?? null;
    }

    /**
     * Set EpayNumber
     *
     * @return $this
     */
    public function setEpayNumber(?string $value)
    {
        $this->EpayNumber = $value;

        return $this;
    }

    /**
     * Get RegNumber
     */
    public function getRegNumber(): ?string
    {
        return $this->RegNumber ?? null;
    }

    /**
     * Set RegNumber
     *
     * @return $this
     */
    public function setRegNumber(?string $value)
    {
        $this->RegNumber = $value;

        return $this;
    }

    /**
     * Get OksmNumber
     */
    public function getOksmNumber(): ?string
    {
        return $this->OksmNumber ?? null;
    }

    /**
     * Set OksmNumber
     *
     * @return $this
     */
    public function setOksmNumber(?string $value)
    {
        $this->OksmNumber = $value;

        return $this;
    }

    /**
     * Get OkvedCode
     */
    public function getOkvedCode(): ?string
    {
        return $this->OkvedCode ?? null;
    }

    /**
     * Set OkvedCode
     *
     * @return $this
     */
    public function setOkvedCode(?string $value)
    {
        $this->OkvedCode = $value;

        return $this;
    }
}
