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
    protected $Email = null;

    protected $WarnPlaceInterval = null;

    protected $MoneyWarningValue = null;

    protected $PausedByDayBudget = null;

    protected $SendAccNews = null;

    protected $SendWarn = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * @return $this
     */
    public function setEmail(?string $value = null)
    {
        $this->Email = $value;

        return $this;
    }

    public function getWarnPlaceInterval(): int
    {
        return $this->WarnPlaceInterval;
    }

    /**
     * @return $this
     */
    public function setWarnPlaceInterval(int $value)
    {
        $this->WarnPlaceInterval = $value;

        return $this;
    }

    public function getMoneyWarningValue(): ?int
    {
        return $this->MoneyWarningValue;
    }

    /**
     * @return $this
     */
    public function setMoneyWarningValue(?int $value = null)
    {
        $this->MoneyWarningValue = $value;

        return $this;
    }

    public function getPausedByDayBudget(): ?string
    {
        return $this->PausedByDayBudget;
    }

    /**
     * @return $this
     */
    public function setPausedByDayBudget(?string $value = null)
    {
        $this->PausedByDayBudget = $value;

        return $this;
    }

    public function getSendAccNews(): ?string
    {
        return $this->SendAccNews;
    }

    /**
     * @return $this
     */
    public function setSendAccNews(?string $value = null)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    public function getSendWarn(): ?string
    {
        return $this->SendWarn;
    }

    /**
     * @return $this
     */
    public function setSendWarn(?string $value = null)
    {
        $this->SendWarn = $value;

        return $this;
    }
}
