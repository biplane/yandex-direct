<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class GetSummaryStatRequest
{
    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var date
     */
    protected $StartDate;
    /**
     * @var date
     */
    protected $EndDate;

    /**
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * @param int[] $CampaignIDS
     * @return GetSummaryStatRequest
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

        return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return GetSummaryStatRequest
     */
    public function setStartDate($StartDate)
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return GetSummaryStatRequest
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;

        return $this;
    }
}