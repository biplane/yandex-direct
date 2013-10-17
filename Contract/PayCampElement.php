<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class PayCampElement
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var float
     */
    protected $Sum;
    /**
     * @var string
     */
    protected $Currency;

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
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return PayCampElement
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the Sum.
     *
     * @return float
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets the Sum.
     *
     * @param float $Sum
     *
     * @return PayCampElement
     */
    public function setSum($Sum)
    {
        $this->Sum = $Sum;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return PayCampElement
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}