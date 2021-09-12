<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class EmailSettings
{
//    Can be omitted.
//    protected $Email = null;

//    Can be omitted.
//    protected $CheckPositionInterval = null;

//    Can be omitted.
//    protected $WarningBalance = null;

//    Can be omitted.
//    protected $SendAccountNews = null;

//    Can be omitted.
//    protected $SendWarnings = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    public function getCheckPositionInterval(): ?int
    {
        return $this->CheckPositionInterval ?? null;
    }

    /**
     * @return $this
     */
    public function setCheckPositionInterval(?int $value = null)
    {
        $this->CheckPositionInterval = $value;

        return $this;
    }

    public function getWarningBalance(): ?int
    {
        return $this->WarningBalance ?? null;
    }

    /**
     * @return $this
     */
    public function setWarningBalance(?int $value = null)
    {
        $this->WarningBalance = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getSendAccountNews(): ?string
    {
        return $this->SendAccountNews ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSendAccountNews(?string $value = null)
    {
        $this->SendAccountNews = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getSendWarnings(): ?string
    {
        return $this->SendWarnings ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSendWarnings(?string $value = null)
    {
        $this->SendWarnings = $value;

        return $this;
    }
}
