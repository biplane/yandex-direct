<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
    protected $TextDescription;
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
     * @return EventsLogItem
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the BannerID.
     *
     * @return int
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets the BannerID.
     *
     * @param int $BannerID
     *
     * @return EventsLogItem
     */
    public function setBannerID($BannerID)
    {
        $this->BannerID = $BannerID;

        return $this;
    }

    /**
     * Gets the PhraseID.
     *
     * @return int
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets the PhraseID.
     *
     * @param int $PhraseID
     *
     * @return EventsLogItem
     */
    public function setPhraseID($PhraseID)
    {
        $this->PhraseID = $PhraseID;

        return $this;
    }

    /**
     * Gets the TextDescription.
     *
     * @return string
     */
    public function getTextDescription()
    {
        return $this->TextDescription;
    }

    /**
     * Sets the TextDescription.
     *
     * @param string $TextDescription
     *
     * @return EventsLogItem
     */
    public function setTextDescription($TextDescription)
    {
        $this->TextDescription = $TextDescription;

        return $this;
    }

    /**
     * Gets the EventType.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * Sets the EventType.
     *
     * @param string $EventType
     *
     * @return EventsLogItem
     */
    public function setEventType($EventType)
    {
        $this->EventType = $EventType;

        return $this;
    }

    /**
     * Gets the Timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets the Timestamp.
     *
     * @param string $Timestamp
     *
     * @return EventsLogItem
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;

        return $this;
    }

    /**
     * Gets the EventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->EventName;
    }

    /**
     * Sets the EventName.
     *
     * @param string $EventName
     *
     * @return EventsLogItem
     */
    public function setEventName($EventName)
    {
        $this->EventName = $EventName;

        return $this;
    }

    /**
     * Gets the Attributes.
     *
     * @return EventsLogItemAttributes
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * Sets the Attributes.
     *
     * @param EventsLogItemAttributes $Attributes
     *
     * @return EventsLogItem
     */
    public function setAttributes(EventsLogItemAttributes $Attributes)
    {
        $this->Attributes = $Attributes;

        return $this;
    }
}