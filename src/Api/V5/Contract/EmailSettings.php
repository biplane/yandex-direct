<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class EmailSettings
{

//    Can be omit.
//    protected $Email = null;

//    Can be omit.
//    protected $CheckPositionInterval = null;

//    Can be omit.
//    protected $WarningBalance = null;

//    Can be omit.
//    protected $SendAccountNews = null;

//    Can be omit.
//    protected $SendWarnings = null;

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
        return isset($this->Email) ? $this->Email : null;
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
        return isset($this->CheckPositionInterval) ? $this->CheckPositionInterval : null;
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
        return isset($this->WarningBalance) ? $this->WarningBalance : null;
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
        return isset($this->SendAccountNews) ? $this->SendAccountNews : null;
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
        return isset($this->SendWarnings) ? $this->SendWarnings : null;
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

