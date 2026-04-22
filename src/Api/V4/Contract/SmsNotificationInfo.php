<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmsNotificationInfo
{
    /** @var string|null */
    protected $MetricaSms = null;

    /** @var string|null */
    protected $ModerateResultSms = null;

    /** @var string|null */
    protected $MoneyInSms = null;

    /** @var string|null */
    protected $MoneyOutSms = null;

    /** @var string|null */
    protected $PausedByDayBudgetSms = null;

    /** @var string|null */
    protected $SmsTimeFrom = null;

    /** @var string|null */
    protected $SmsTimeTo = null;

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
     * Get MetricaSms
     */
    public function getMetricaSms(): ?string
    {
        return $this->MetricaSms;
    }

    /**
     * Set MetricaSms
     *
     * @return $this
     */
    public function setMetricaSms(?string $value)
    {
        $this->MetricaSms = $value;

        return $this;
    }

    /**
     * Get ModerateResultSms
     */
    public function getModerateResultSms(): ?string
    {
        return $this->ModerateResultSms;
    }

    /**
     * Set ModerateResultSms
     *
     * @return $this
     */
    public function setModerateResultSms(?string $value)
    {
        $this->ModerateResultSms = $value;

        return $this;
    }

    /**
     * Get MoneyInSms
     */
    public function getMoneyInSms(): ?string
    {
        return $this->MoneyInSms;
    }

    /**
     * Set MoneyInSms
     *
     * @return $this
     */
    public function setMoneyInSms(?string $value)
    {
        $this->MoneyInSms = $value;

        return $this;
    }

    /**
     * Get MoneyOutSms
     */
    public function getMoneyOutSms(): ?string
    {
        return $this->MoneyOutSms;
    }

    /**
     * Set MoneyOutSms
     *
     * @return $this
     */
    public function setMoneyOutSms(?string $value)
    {
        $this->MoneyOutSms = $value;

        return $this;
    }

    /**
     * Get PausedByDayBudgetSms
     */
    public function getPausedByDayBudgetSms(): ?string
    {
        return $this->PausedByDayBudgetSms;
    }

    /**
     * Set PausedByDayBudgetSms
     *
     * @return $this
     */
    public function setPausedByDayBudgetSms(?string $value)
    {
        $this->PausedByDayBudgetSms = $value;

        return $this;
    }

    /**
     * Get SmsTimeFrom
     */
    public function getSmsTimeFrom(): ?string
    {
        return $this->SmsTimeFrom;
    }

    /**
     * Set SmsTimeFrom
     *
     * @return $this
     */
    public function setSmsTimeFrom(?string $value)
    {
        $this->SmsTimeFrom = $value;

        return $this;
    }

    /**
     * Get SmsTimeTo
     */
    public function getSmsTimeTo(): ?string
    {
        return $this->SmsTimeTo;
    }

    /**
     * Set SmsTimeTo
     *
     * @return $this
     */
    public function setSmsTimeTo(?string $value)
    {
        $this->SmsTimeTo = $value;

        return $this;
    }
}
