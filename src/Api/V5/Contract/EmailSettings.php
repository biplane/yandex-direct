<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class EmailSettings
{

    protected $Email = null;

    protected $CheckPositionInterval = null;

    protected $WarningBalance = null;

    protected $SendAccountNews = null;

    protected $SendWarnings = null;

    /**
     * Creates a new instance of EmailSettings.
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
     * @return self
     */
    public function setEmail($value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets CheckPositionInterval.
     *
     * @return int|null
     */
    public function getCheckPositionInterval()
    {
        return $this->CheckPositionInterval;
    }

    /**
     * Sets CheckPositionInterval.
     *
     * @param int|null $value
     * @return self
     */
    public function setCheckPositionInterval($value = null)
    {
        $this->CheckPositionInterval = $value;

        return $this;
    }

    /**
     * Gets WarningBalance.
     *
     * @return int|null
     */
    public function getWarningBalance()
    {
        return $this->WarningBalance;
    }

    /**
     * Sets WarningBalance.
     *
     * @param int|null $value
     * @return self
     */
    public function setWarningBalance($value = null)
    {
        $this->WarningBalance = $value;

        return $this;
    }

    /**
     * Gets SendAccountNews.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getSendAccountNews()
    {
        return $this->SendAccountNews;
    }

    /**
     * Sets SendAccountNews.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setSendAccountNews($value = null)
    {
        $this->SendAccountNews = $value;

        return $this;
    }

    /**
     * Gets SendWarnings.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getSendWarnings()
    {
        return $this->SendWarnings;
    }

    /**
     * Sets SendWarnings.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setSendWarnings($value = null)
    {
        $this->SendWarnings = $value;

        return $this;
    }


}

