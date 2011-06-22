<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class EmailNotificationInfo
{
    /**
     * @var string
     */
    protected $Email;
    /**
     * @var int
     */
    protected $WarnPlaceInterval;
    /**
     * @var int
     */
    protected $MoneyWarningValue;
    /**
     * @var string
     */
    protected $SendAccNews;
    /**
     * @var string
     */
    protected $SendWarn;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return EmailNotificationInfo
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * @return int
     */
    public function getWarnPlaceInterval()
    {
        return $this->WarnPlaceInterval;
    }

    /**
     * @param int $WarnPlaceInterval
     * @return EmailNotificationInfo
     */
    public function setWarnPlaceInterval($WarnPlaceInterval)
    {
        $this->WarnPlaceInterval = $WarnPlaceInterval;

        return $this;
    }

    /**
     * @return int
     */
    public function getMoneyWarningValue()
    {
        return $this->MoneyWarningValue;
    }

    /**
     * @param int $MoneyWarningValue
     * @return EmailNotificationInfo
     */
    public function setMoneyWarningValue($MoneyWarningValue)
    {
        $this->MoneyWarningValue = $MoneyWarningValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendAccNews()
    {
        return $this->SendAccNews;
    }

    /**
     * @param string $SendAccNews
     * @return EmailNotificationInfo
     */
    public function setSendAccNews($SendAccNews)
    {
        $this->SendAccNews = $SendAccNews;

        return $this;
    }

    /**
     * @return string
     */
    public function getSendWarn()
    {
        return $this->SendWarn;
    }

    /**
     * @param string $SendWarn
     * @return EmailNotificationInfo
     */
    public function setSendWarn($SendWarn)
    {
        $this->SendWarn = $SendWarn;

        return $this;
    }
}