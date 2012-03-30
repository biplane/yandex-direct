<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class EventsLogItem
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var int
     */
    protected $BannerID;
    /**
     * @var int
     */
    protected $PhraseID;
    /**
     * @var string
     */
    protected $EventType;
    /**
     * @var string
     */
    protected $Timestamp;
    /**
     * @var string
     */
    protected $EventName;
    /**
     * @var EventsLogItemAttributes
     */
    protected $Attributes;

    /**
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param int $CampaignID
     * @return EventsLogItem
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * @param int $BannerID
     * @return EventsLogItem
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * @param int $PhraseID
     * @return EventsLogItem
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * @param string $EventType
     * @return EventsLogItem
     */
    public function setEventType($EventType)
    {
        $this->EventType = $EventType;

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
     * @return EventsLogItem
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->EventName;
    }

    /**
     * @param string $EventName
     * @return EventsLogItem
     */
    public function setEventName($EventName)
    {
        $this->EventName = $EventName;

        return $this;
    }

    /**
     * @return EventsLogItemAttributes
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * @param EventsLogItemAttributes $Attributes
     * @return EventsLogItem
     */
    public function setAttributes(EventsLogItemAttributes $Attributes)
    {
        $this->Attributes = $Attributes;

        return $this;
    }
}