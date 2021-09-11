<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EmailNotificationInfo
{
    protected $Email = null;

    protected $WarnPlaceInterval = null;

    protected $MoneyWarningValue = null;

    protected $PausedByDayBudget = null;

    protected $SendAccNews = null;

    protected $SendWarn = null;

    /**
     * Creates a new instance of EmailNotificationInfo.
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
        return $this->Email;
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
     * Gets WarnPlaceInterval.
     */
    public function getWarnPlaceInterval(): int
    {
        return $this->WarnPlaceInterval;
    }

    /**
     * Sets WarnPlaceInterval.
     *
     * @return $this
     */
    public function setWarnPlaceInterval(int $value)
    {
        $this->WarnPlaceInterval = $value;

        return $this;
    }

    /**
     * Gets MoneyWarningValue.
     */
    public function getMoneyWarningValue(): ?int
    {
        return $this->MoneyWarningValue;
    }

    /**
     * Sets MoneyWarningValue.
     *
     * @return $this
     */
    public function setMoneyWarningValue(?int $value = null)
    {
        $this->MoneyWarningValue = $value;

        return $this;
    }

    /**
     * Gets PausedByDayBudget.
     */
    public function getPausedByDayBudget(): ?string
    {
        return $this->PausedByDayBudget;
    }

    /**
     * Sets PausedByDayBudget.
     *
     * @return $this
     */
    public function setPausedByDayBudget(?string $value = null)
    {
        $this->PausedByDayBudget = $value;

        return $this;
    }

    /**
     * Gets SendAccNews.
     */
    public function getSendAccNews(): ?string
    {
        return $this->SendAccNews;
    }

    /**
     * Sets SendAccNews.
     *
     * @return $this
     */
    public function setSendAccNews(?string $value = null)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    /**
     * Gets SendWarn.
     */
    public function getSendWarn(): ?string
    {
        return $this->SendWarn;
    }

    /**
     * Sets SendWarn.
     *
     * @return $this
     */
    public function setSendWarn(?string $value = null)
    {
        $this->SendWarn = $value;

        return $this;
    }
}
