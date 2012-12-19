<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CampaignStatChangeItem
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $BorderDate;

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
     * @return CampaignStatChangeItem
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the BorderDate.
     *
     * @return string
     */
    public function getBorderDate()
    {
        return $this->BorderDate;
    }

    /**
     * Sets the BorderDate.
     *
     * @param string $BorderDate
     *
     * @return CampaignStatChangeItem
     */
    public function setBorderDate($BorderDate)
    {
        $this->BorderDate = $BorderDate;

        return $this;
    }
}