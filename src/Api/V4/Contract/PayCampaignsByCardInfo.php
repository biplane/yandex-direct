<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PayCampaignsByCardInfo
{

    protected $PayMethodID = null;

    protected $CustomTransactionID = null;

    protected $Payments = [];

    /**
     * Creates a new instance of PayCampaignsByCardInfo.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets PayMethodID.
     *
     * @return string
     */
    public function getPayMethodID()
    {
        return $this->PayMethodID;
    }

    /**
     * Sets PayMethodID.
     *
     * @param string $value
     * @return $this
     */
    public function setPayMethodID($value)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    /**
     * Gets CustomTransactionID.
     *
     * @return string
     */
    public function getCustomTransactionID()
    {
        return $this->CustomTransactionID;
    }

    /**
     * Sets CustomTransactionID.
     *
     * @param string $value
     * @return $this
     */
    public function setCustomTransactionID($value)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }

    /**
     * Gets Payments.
     *
     * @return PayCampElement[]
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Sets Payments.
     *
     * @param PayCampElement[] $value
     * @return $this
     */
    public function setPayments(array $value)
    {
        $this->Payments = $value;

        return $this;
    }


}

