<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class SmsNotificationInfo
{
    /**
     * @var string
     */
    protected $MetricaSms;
    /**
     * @var string
     */
    protected $ModerateResultSms;
    /**
     * @var string
     */
    protected $MoneyInSms;
    /**
     * @var string
     */
    protected $MoneyOutSms;
    /**
     * @var string
     */
    protected $SmsTimeFrom;
    /**
     * @var string
     */
    protected $SmsTimeTo;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the MetricaSms.
     *
     * @return string
     */
    public function getMetricaSms()
    {
        return $this->MetricaSms;
    }

    /**
     * Sets the MetricaSms.
     *
     * @param string $MetricaSms
     *
     * @return SmsNotificationInfo
     */
    public function setMetricaSms($MetricaSms)
    {
        $this->MetricaSms = $MetricaSms;

        return $this;
    }

    /**
     * Gets the ModerateResultSms.
     *
     * @return string
     */
    public function getModerateResultSms()
    {
        return $this->ModerateResultSms;
    }

    /**
     * Sets the ModerateResultSms.
     *
     * @param string $ModerateResultSms
     *
     * @return SmsNotificationInfo
     */
    public function setModerateResultSms($ModerateResultSms)
    {
        $this->ModerateResultSms = $ModerateResultSms;

        return $this;
    }

    /**
     * Gets the MoneyInSms.
     *
     * @return string
     */
    public function getMoneyInSms()
    {
        return $this->MoneyInSms;
    }

    /**
     * Sets the MoneyInSms.
     *
     * @param string $MoneyInSms
     *
     * @return SmsNotificationInfo
     */
    public function setMoneyInSms($MoneyInSms)
    {
        $this->MoneyInSms = $MoneyInSms;

        return $this;
    }

    /**
     * Gets the MoneyOutSms.
     *
     * @return string
     */
    public function getMoneyOutSms()
    {
        return $this->MoneyOutSms;
    }

    /**
     * Sets the MoneyOutSms.
     *
     * @param string $MoneyOutSms
     *
     * @return SmsNotificationInfo
     */
    public function setMoneyOutSms($MoneyOutSms)
    {
        $this->MoneyOutSms = $MoneyOutSms;

        return $this;
    }

    /**
     * Gets the SmsTimeFrom.
     *
     * @return string
     */
    public function getSmsTimeFrom()
    {
        return $this->SmsTimeFrom;
    }

    /**
     * Sets the SmsTimeFrom.
     *
     * @param string $SmsTimeFrom
     *
     * @return SmsNotificationInfo
     */
    public function setSmsTimeFrom($SmsTimeFrom)
    {
        $this->SmsTimeFrom = $SmsTimeFrom;

        return $this;
    }

    /**
     * Gets the SmsTimeTo.
     *
     * @return string
     */
    public function getSmsTimeTo()
    {
        return $this->SmsTimeTo;
    }

    /**
     * Sets the SmsTimeTo.
     *
     * @param string $SmsTimeTo
     *
     * @return SmsNotificationInfo
     */
    public function setSmsTimeTo($SmsTimeTo)
    {
        $this->SmsTimeTo = $SmsTimeTo;

        return $this;
    }
}