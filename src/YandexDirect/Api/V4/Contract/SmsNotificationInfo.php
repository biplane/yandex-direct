<?php

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

    protected $SmsTimeFrom = null;

    protected $SmsTimeTo = null;

    /**
     * Creates a new instance of SmsNotificationInfo.
     *
     * @return SmsNotificationInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MetricaSms.
     *
     * @return string|null
     */
    public function getMetricaSms()
    {
        return $this->MetricaSms;
    }

    /**
     * Sets MetricaSms.
     *
     * @param string|null $value
     * @return $this
     */
    public function setMetricaSms($value = null)
    {
        $this->MetricaSms = $value;

        return $this;
    }

    /**
     * Gets ModerateResultSms.
     *
     * @return string|null
     */
    public function getModerateResultSms()
    {
        return $this->ModerateResultSms;
    }

    /**
     * Sets ModerateResultSms.
     *
     * @param string|null $value
     * @return $this
     */
    public function setModerateResultSms($value = null)
    {
        $this->ModerateResultSms = $value;

        return $this;
    }

    /**
     * Gets MoneyInSms.
     *
     * @return string|null
     */
    public function getMoneyInSms()
    {
        return $this->MoneyInSms;
    }

    /**
     * Sets MoneyInSms.
     *
     * @param string|null $value
     * @return $this
     */
    public function setMoneyInSms($value = null)
    {
        $this->MoneyInSms = $value;

        return $this;
    }

    /**
     * Gets MoneyOutSms.
     *
     * @return string|null
     */
    public function getMoneyOutSms()
    {
        return $this->MoneyOutSms;
    }

    /**
     * Sets MoneyOutSms.
     *
     * @param string|null $value
     * @return $this
     */
    public function setMoneyOutSms($value = null)
    {
        $this->MoneyOutSms = $value;

        return $this;
    }

    /**
     * Gets SmsTimeFrom.
     *
     * @return string|null
     */
    public function getSmsTimeFrom()
    {
        return $this->SmsTimeFrom;
    }

    /**
     * Sets SmsTimeFrom.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSmsTimeFrom($value = null)
    {
        $this->SmsTimeFrom = $value;

        return $this;
    }

    /**
     * Gets SmsTimeTo.
     *
     * @return string|null
     */
    public function getSmsTimeTo()
    {
        return $this->SmsTimeTo;
    }

    /**
     * Sets SmsTimeTo.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSmsTimeTo($value = null)
    {
        $this->SmsTimeTo = $value;

        return $this;
    }


}

