<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class EmailNotificationInfo
{
    /** @var string|null */
    protected $Email = null;

    /** @var int */
    protected $WarnPlaceInterval;

    /** @var int|null */
    protected $MoneyWarningValue = null;

    /** @var string|null */
    protected $PausedByDayBudget = null;

    /** @var string|null */
    protected $SendAccNews = null;

    /** @var string|null */
    protected $SendWarn = null;

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
        return $this->Email;
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
     * Get WarnPlaceInterval
     */
    public function getWarnPlaceInterval(): int
    {
        return $this->WarnPlaceInterval;
    }

    /**
     * Set WarnPlaceInterval
     *
     * @return $this
     */
    public function setWarnPlaceInterval(int $value)
    {
        $this->WarnPlaceInterval = $value;

        return $this;
    }

    /**
     * Get MoneyWarningValue
     */
    public function getMoneyWarningValue(): ?int
    {
        return $this->MoneyWarningValue;
    }

    /**
     * Set MoneyWarningValue
     *
     * @return $this
     */
    public function setMoneyWarningValue(?int $value)
    {
        $this->MoneyWarningValue = $value;

        return $this;
    }

    /**
     * Get PausedByDayBudget
     */
    public function getPausedByDayBudget(): ?string
    {
        return $this->PausedByDayBudget;
    }

    /**
     * Set PausedByDayBudget
     *
     * @return $this
     */
    public function setPausedByDayBudget(?string $value)
    {
        $this->PausedByDayBudget = $value;

        return $this;
    }

    /**
     * Get SendAccNews
     */
    public function getSendAccNews(): ?string
    {
        return $this->SendAccNews;
    }

    /**
     * Set SendAccNews
     *
     * @return $this
     */
    public function setSendAccNews(?string $value)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    /**
     * Get SendWarn
     */
    public function getSendWarn(): ?string
    {
        return $this->SendWarn;
    }

    /**
     * Set SendWarn
     *
     * @return $this
     */
    public function setSendWarn(?string $value)
    {
        $this->SendWarn = $value;

        return $this;
    }
}
