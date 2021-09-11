<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class EmailSettings
{
//    Can be omit.
//    protected $Email = null;

//    Can be omit.
//    protected $CheckPositionInterval = null;

//    Can be omit.
//    protected $WarningBalance = null;

//    Can be omit.
//    protected $SendAccountNews = null;

//    Can be omit.
//    protected $SendWarnings = null;

    /**
     * Creates a new instance of EmailSettings.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Email.
     */
    public function getEmail(): ?string
    {
        return $this->Email ?? null;
    }

    /**
     * Sets Email.
     *
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets CheckPositionInterval.
     */
    public function getCheckPositionInterval(): ?int
    {
        return $this->CheckPositionInterval ?? null;
    }

    /**
     * Sets CheckPositionInterval.
     *
     * @return $this
     */
    public function setCheckPositionInterval(?int $value = null)
    {
        $this->CheckPositionInterval = $value;

        return $this;
    }

    /**
     * Gets WarningBalance.
     */
    public function getWarningBalance(): ?int
    {
        return $this->WarningBalance ?? null;
    }

    /**
     * Sets WarningBalance.
     *
     * @return $this
     */
    public function setWarningBalance(?int $value = null)
    {
        $this->WarningBalance = $value;

        return $this;
    }

    /**
     * Gets SendAccountNews.
     *
     * @see YesNoEnum
     */
    public function getSendAccountNews(): ?string
    {
        return $this->SendAccountNews ?? null;
    }

    /**
     * Sets SendAccountNews.
     *
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
     * Gets SendWarnings.
     *
     * @see YesNoEnum
     */
    public function getSendWarnings(): ?string
    {
        return $this->SendWarnings ?? null;
    }

    /**
     * Sets SendWarnings.
     *
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
