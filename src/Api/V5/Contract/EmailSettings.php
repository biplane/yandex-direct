<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class EmailSettings
{
//    Can be omitted.
//    protected $Email;

//    Can be omitted.
//    protected $CheckPositionInterval;

//    Can be omitted.
//    protected $WarningBalance;

//    Can be omitted.
//    protected $SendAccountNews;

//    Can be omitted.
//    protected $SendWarnings;

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
     * Get Email
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Set Email
     *
     * @return $this
     */
    public function setEmail(?string $value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Get CheckPositionInterval
     */
    public function getCheckPositionInterval(): ?int
    {
        return $this->CheckPositionInterval ?? null;
    }

    /**
     * Set CheckPositionInterval
     *
     * @return $this
     */
    public function setCheckPositionInterval(?int $value)
    {
        $this->CheckPositionInterval = $value;

        return $this;
    }

    /**
     * Get WarningBalance
     */
    public function getWarningBalance(): ?int
    {
        return $this->WarningBalance ?? null;
    }

    /**
     * Set WarningBalance
     *
     * @return $this
     */
    public function setWarningBalance(?int $value)
    {
        $this->WarningBalance = $value;

        return $this;
    }

    /**
     * Get SendAccountNews
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getSendAccountNews(): ?string
    {
        return $this->SendAccountNews ?? null;
    }

    /**
     * Set SendAccountNews
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setSendAccountNews(?string $value)
    {
        $this->SendAccountNews = $value;

        return $this;
    }

    /**
     * Get SendWarnings
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getSendWarnings(): ?string
    {
        return $this->SendWarnings ?? null;
    }

    /**
     * Set SendWarnings
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setSendWarnings(?string $value)
    {
        $this->SendWarnings = $value;

        return $this;
    }
}
