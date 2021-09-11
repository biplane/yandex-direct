<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class SmsNotificationInfo
{
    protected $MetricaSms = null;

    protected $ModerateResultSms = null;

    protected $MoneyInSms = null;

    protected $MoneyOutSms = null;

    protected $PausedByDayBudgetSms = null;

    protected $SmsTimeFrom = null;

    protected $SmsTimeTo = null;

    /**
     * Creates a new instance of SmsNotificationInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MetricaSms.
     */
    public function getMetricaSms(): ?string
    {
        return $this->MetricaSms;
    }

    /**
     * Sets MetricaSms.
     *
     * @return $this
     */
    public function setMetricaSms(?string $value = null)
    {
        $this->MetricaSms = $value;

        return $this;
    }

    /**
     * Gets ModerateResultSms.
     */
    public function getModerateResultSms(): ?string
    {
        return $this->ModerateResultSms;
    }

    /**
     * Sets ModerateResultSms.
     *
     * @return $this
     */
    public function setModerateResultSms(?string $value = null)
    {
        $this->ModerateResultSms = $value;

        return $this;
    }

    /**
     * Gets MoneyInSms.
     */
    public function getMoneyInSms(): ?string
    {
        return $this->MoneyInSms;
    }

    /**
     * Sets MoneyInSms.
     *
     * @return $this
     */
    public function setMoneyInSms(?string $value = null)
    {
        $this->MoneyInSms = $value;

        return $this;
    }

    /**
     * Gets MoneyOutSms.
     */
    public function getMoneyOutSms(): ?string
    {
        return $this->MoneyOutSms;
    }

    /**
     * Sets MoneyOutSms.
     *
     * @return $this
     */
    public function setMoneyOutSms(?string $value = null)
    {
        $this->MoneyOutSms = $value;

        return $this;
    }

    /**
     * Gets PausedByDayBudgetSms.
     */
    public function getPausedByDayBudgetSms(): ?string
    {
        return $this->PausedByDayBudgetSms;
    }

    /**
     * Sets PausedByDayBudgetSms.
     *
     * @return $this
     */
    public function setPausedByDayBudgetSms(?string $value = null)
    {
        $this->PausedByDayBudgetSms = $value;

        return $this;
    }

    /**
     * Gets SmsTimeFrom.
     */
    public function getSmsTimeFrom(): ?string
    {
        return $this->SmsTimeFrom;
    }

    /**
     * Sets SmsTimeFrom.
     *
     * @return $this
     */
    public function setSmsTimeFrom(?string $value = null)
    {
        $this->SmsTimeFrom = $value;

        return $this;
    }

    /**
     * Gets SmsTimeTo.
     */
    public function getSmsTimeTo(): ?string
    {
        return $this->SmsTimeTo;
    }

    /**
     * Sets SmsTimeTo.
     *
     * @return $this
     */
    public function setSmsTimeTo(?string $value = null)
    {
        $this->SmsTimeTo = $value;

        return $this;
    }
}
