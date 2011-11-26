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
     * @var date
     */
    protected $BorderDate;

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return CampaignStatChangeItem
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return date
     */
    public function getBorderDate()
    {
        return $this->BorderDate;
    }

    /**
     * @param date $BorderDate
     * @return CampaignStatChangeItem
     */
    public function setBorderDate($BorderDate)
    {
        $this->BorderDate = $BorderDate;

        return $this;
    }
}