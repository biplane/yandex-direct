<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string|null $value
     * @return $this
     */
    public function setEmail($value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets WarnPlaceInterval.
     *
     * @return int
     */
    public function getWarnPlaceInterval()
    {
        return $this->WarnPlaceInterval;
    }

    /**
     * Sets WarnPlaceInterval.
     *
     * @param int $value
     * @return $this
     */
    public function setWarnPlaceInterval($value)
    {
        $this->WarnPlaceInterval = $value;

        return $this;
    }

    /**
     * Gets MoneyWarningValue.
     *
     * @return int|null
     */
    public function getMoneyWarningValue()
    {
        return $this->MoneyWarningValue;
    }

    /**
     * Sets MoneyWarningValue.
     *
     * @param int|null $value
     * @return $this
     */
    public function setMoneyWarningValue($value = null)
    {
        $this->MoneyWarningValue = $value;

        return $this;
    }

    /**
     * Gets PausedByDayBudget.
     *
     * @return string|null
     */
    public function getPausedByDayBudget()
    {
        return $this->PausedByDayBudget;
    }

    /**
     * Sets PausedByDayBudget.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPausedByDayBudget($value = null)
    {
        $this->PausedByDayBudget = $value;

        return $this;
    }

    /**
     * Gets SendAccNews.
     *
     * @return string|null
     */
    public function getSendAccNews()
    {
        return $this->SendAccNews;
    }

    /**
     * Sets SendAccNews.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSendAccNews($value = null)
    {
        $this->SendAccNews = $value;

        return $this;
    }

    /**
     * Gets SendWarn.
     *
     * @return string|null
     */
    public function getSendWarn()
    {
        return $this->SendWarn;
    }

    /**
     * Sets SendWarn.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSendWarn($value = null)
    {
        $this->SendWarn = $value;

        return $this;
    }


}

