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
    protected $MetricaSms = null;

    protected $ModerateResultSms = null;

    protected $MoneyInSms = null;

    protected $MoneyOutSms = null;

    protected $PausedByDayBudgetSms = null;

    protected $SmsTimeFrom = null;

    protected $SmsTimeTo = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMetricaSms(): ?string
    {
        return $this->MetricaSms;
    }

    /**
     * @return $this
     */
    public function setMetricaSms(?string $value = null)
    {
        $this->MetricaSms = $value;

        return $this;
    }

    public function getModerateResultSms(): ?string
    {
        return $this->ModerateResultSms;
    }

    /**
     * @return $this
     */
    public function setModerateResultSms(?string $value = null)
    {
        $this->ModerateResultSms = $value;

        return $this;
    }

    public function getMoneyInSms(): ?string
    {
        return $this->MoneyInSms;
    }

    /**
     * @return $this
     */
    public function setMoneyInSms(?string $value = null)
    {
        $this->MoneyInSms = $value;

        return $this;
    }

    public function getMoneyOutSms(): ?string
    {
        return $this->MoneyOutSms;
    }

    /**
     * @return $this
     */
    public function setMoneyOutSms(?string $value = null)
    {
        $this->MoneyOutSms = $value;

        return $this;
    }

    public function getPausedByDayBudgetSms(): ?string
    {
        return $this->PausedByDayBudgetSms;
    }

    /**
     * @return $this
     */
    public function setPausedByDayBudgetSms(?string $value = null)
    {
        $this->PausedByDayBudgetSms = $value;

        return $this;
    }

    public function getSmsTimeFrom(): ?string
    {
        return $this->SmsTimeFrom;
    }

    /**
     * @return $this
     */
    public function setSmsTimeFrom(?string $value = null)
    {
        $this->SmsTimeFrom = $value;

        return $this;
    }

    public function getSmsTimeTo(): ?string
    {
        return $this->SmsTimeTo;
    }

    /**
     * @return $this
     */
    public function setSmsTimeTo(?string $value = null)
    {
        $this->SmsTimeTo = $value;

        return $this;
    }
}
