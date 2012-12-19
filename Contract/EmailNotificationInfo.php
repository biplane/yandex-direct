<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets the Email.
     *
     * @param string $Email
     *
     * @return EmailNotificationInfo
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Gets the WarnPlaceInterval.
     *
     * @return int
     */
    public function getWarnPlaceInterval()
    {
        return $this->WarnPlaceInterval;
    }

    /**
     * Sets the WarnPlaceInterval.
     *
     * @param int $WarnPlaceInterval
     *
     * @return EmailNotificationInfo
     */
    public function setWarnPlaceInterval($WarnPlaceInterval)
    {
        $this->WarnPlaceInterval = $WarnPlaceInterval;

        return $this;
    }

    /**
     * Gets the MoneyWarningValue.
     *
     * @return int
     */
    public function getMoneyWarningValue()
    {
        return $this->MoneyWarningValue;
    }

    /**
     * Sets the MoneyWarningValue.
     *
     * @param int $MoneyWarningValue
     *
     * @return EmailNotificationInfo
     */
    public function setMoneyWarningValue($MoneyWarningValue)
    {
        $this->MoneyWarningValue = $MoneyWarningValue;

        return $this;
    }

    /**
     * Gets the SendAccNews.
     *
     * @return string
     */
    public function getSendAccNews()
    {
        return $this->SendAccNews;
    }

    /**
     * Sets the SendAccNews.
     *
     * @param string $SendAccNews
     *
     * @return EmailNotificationInfo
     */
    public function setSendAccNews($SendAccNews)
    {
        $this->SendAccNews = $SendAccNews;

        return $this;
    }

    /**
     * Gets the SendWarn.
     *
     * @return string
     */
    public function getSendWarn()
    {
        return $this->SendWarn;
    }

    /**
     * Sets the SendWarn.
     *
     * @param string $SendWarn
     *
     * @return EmailNotificationInfo
     */
    public function setSendWarn($SendWarn)
    {
        $this->SendWarn = $SendWarn;

        return $this;
    }
}