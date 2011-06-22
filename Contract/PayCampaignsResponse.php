<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class PayCampaignsResponse
{
    /**
     * @var string
     */
    protected $InvoiceID;
    /**
     * @var int
     */
    protected $ClientID;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var float
     */
    protected $CurrencyRate;
    /**
     * @var float
     */
    protected $Sum;
    /**
     * @var string
     */
    protected $Timestamp;

    /**
     * @return string
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }

    /**
     * @param string $InvoiceID
     * @return PayCampaignsResponse
     */
    public function setInvoiceID($InvoiceID)
    {
        $this->InvoiceID = $InvoiceID;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return PayCampaignsResponse
     */
    public function setClientID($ClientID)
    {
        $this->ClientID = $ClientID;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return PayCampaignsResponse
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->CurrencyRate;
    }

    /**
     * @param float $CurrencyRate
     * @return PayCampaignsResponse
     */
    public function setCurrencyRate($CurrencyRate)
    {
        $this->CurrencyRate = $CurrencyRate;

        return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * @param float $Sum
     * @return PayCampaignsResponse
     */
    public function setSum($Sum)
    {
        $this->Sum = $Sum;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * @param string $Timestamp
     * @return PayCampaignsResponse
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }
}