<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class PayCampElement
{

    protected $CampaignID = null;

    protected $Sum = null;

    protected $Currency = null;

    /**
     * Creates a new instance of PayCampElement.
     *
     * @return PayCampElement
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets Sum.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @param float $value
     * @return $this
     */
    public function setSum($value)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

