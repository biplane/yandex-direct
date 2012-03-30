<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class GetEventsLogFilter
{
    /**
     * @var int[]
     */
    protected $CampaignIDS;
    /**
     * @var int[]
     */
    protected $BannerIDS;
    /**
     * @var int[]
     */
    protected $PhraseIDS;
    /**
     * @var string[]
     */
    protected $EventType;

    /**
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * @param int[] $CampaignIDS
     * @return GetEventsLogFilter
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * @param int[] $BannerIDS
     * @return GetEventsLogFilter
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getPhraseIDS()
    {
        return $this->PhraseIDS;
    }

    /**
     * @param int[] $PhraseIDS
     * @return GetEventsLogFilter
     */
    public function setPhraseIDS(array $PhraseIDS)
    {
        $this->PhraseIDS = $PhraseIDS;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * @param string[] $EventType
     * @return GetEventsLogFilter
     */
    public function setEventType(array $EventType)
    {
        $this->EventType = $EventType;

        return $this;
    }
}