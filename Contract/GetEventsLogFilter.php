<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * @var int[]
     */
    protected $AccountIDS;
    /**
     * @var string[]
     */
    protected $EventType;

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
     * Gets the CampaignIDS.
     *
     * @return int[]
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * Sets the CampaignIDS.
     *
     * @param int[] $CampaignIDS
     *
     * @return GetEventsLogFilter
     */
    public function setCampaignIDS(array $CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;

        return $this;
    }

    /**
     * Gets the BannerIDS.
     *
     * @return int[]
     */
    public function getBannerIDS()
    {
        return $this->BannerIDS;
    }

    /**
     * Sets the BannerIDS.
     *
     * @param int[] $BannerIDS
     *
     * @return GetEventsLogFilter
     */
    public function setBannerIDS(array $BannerIDS)
    {
        $this->BannerIDS = $BannerIDS;

        return $this;
    }

    /**
     * Gets the PhraseIDS.
     *
     * @return int[]
     */
    public function getPhraseIDS()
    {
        return $this->PhraseIDS;
    }

    /**
     * Sets the PhraseIDS.
     *
     * @param int[] $PhraseIDS
     *
     * @return GetEventsLogFilter
     */
    public function setPhraseIDS(array $PhraseIDS)
    {
        $this->PhraseIDS = $PhraseIDS;

        return $this;
    }

    /**
     * Gets the AccountIDS.
     *
     * @return int[]
     */
    public function getAccountIDS()
    {
        return $this->AccountIDS;
    }

    /**
     * Sets the AccountIDS.
     *
     * @param int[] $AccountIDS
     *
     * @return GetEventsLogFilter
     */
    public function setAccountIDS(array $AccountIDS)
    {
        $this->AccountIDS = $AccountIDS;

        return $this;
    }

    /**
     * Gets the EventType.
     *
     * @return string[]
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * Sets the EventType.
     *
     * @param string[] $EventType
     *
     * @return GetEventsLogFilter
     */
    public function setEventType(array $EventType)
    {
        $this->EventType = $EventType;

        return $this;
    }
}