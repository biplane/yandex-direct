<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string
     */
    public function getMetricaSms()
    {
        return $this->MetricaSms;
    }

    /**
     * @param string $MetricaSms
     * @return SmsNotificationInfo
     */
    public function setMetricaSms($MetricaSms)
    {
        $this->MetricaSms = $MetricaSms;

        return $this;
    }

    /**
     * @return string
     */
    public function getModerateResultSms()
    {
        return $this->ModerateResultSms;
    }

    /**
     * @param string $ModerateResultSms
     * @return SmsNotificationInfo
     */
    public function setModerateResultSms($ModerateResultSms)
    {
        $this->ModerateResultSms = $ModerateResultSms;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyInSms()
    {
        return $this->MoneyInSms;
    }

    /**
     * @param string $MoneyInSms
     * @return SmsNotificationInfo
     */
    public function setMoneyInSms($MoneyInSms)
    {
        $this->MoneyInSms = $MoneyInSms;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyOutSms()
    {
        return $this->MoneyOutSms;
    }

    /**
     * @param string $MoneyOutSms
     * @return SmsNotificationInfo
     */
    public function setMoneyOutSms($MoneyOutSms)
    {
        $this->MoneyOutSms = $MoneyOutSms;

        return $this;
    }

    /**
     * @return string
     */
    public function getSmsTimeFrom()
    {
        return $this->SmsTimeFrom;
    }

    /**
     * @param string $SmsTimeFrom
     * @return SmsNotificationInfo
     */
    public function setSmsTimeFrom($SmsTimeFrom)
    {
        $this->SmsTimeFrom = $SmsTimeFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getSmsTimeTo()
    {
        return $this->SmsTimeTo;
    }

    /**
     * @param string $SmsTimeTo
     * @return SmsNotificationInfo
     */
    public function setSmsTimeTo($SmsTimeTo)
    {
        $this->SmsTimeTo = $SmsTimeTo;

        return $this;
    }
}