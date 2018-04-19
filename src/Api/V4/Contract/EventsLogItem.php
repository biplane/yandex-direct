<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EventsLogItem
{

    protected $CampaignID = null;

    protected $BannerID = null;

    protected $PhraseID = null;

    protected $AccountID = null;

    protected $TextDescription = null;

    protected $EventType = null;

    protected $Timestamp = null;

    protected $EventName = null;

    protected $Attributes = null;

    /**
     * Creates a new instance of EventsLogItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignID($value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets BannerID.
     *
     * @return int|null
     */
    public function getBannerID()
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBannerID($value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets PhraseID.
     *
     * @return int|null
     */
    public function getPhraseID()
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setPhraseID($value = null)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     *
     * @return int|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAccountID($value = null)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Gets TextDescription.
     *
     * @return string|null
     */
    public function getTextDescription()
    {
        return $this->TextDescription;
    }

    /**
     * Sets TextDescription.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTextDescription($value = null)
    {
        $this->TextDescription = $value;

        return $this;
    }

    /**
     * Gets EventType.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * Sets EventType.
     *
     * @param string $value
     * @return $this
     */
    public function setEventType($value)
    {
        $this->EventType = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string $value
     * @return $this
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    /**
     * Gets EventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->EventName;
    }

    /**
     * Sets EventName.
     *
     * @param string $value
     * @return $this
     */
    public function setEventName($value)
    {
        $this->EventName = $value;

        return $this;
    }

    /**
     * Gets Attributes.
     *
     * @return EventsLogItemAttributes|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }

    /**
     * Sets Attributes.
     *
     * @param EventsLogItemAttributes|null $value
     * @return $this
     */
    public function setAttributes(EventsLogItemAttributes $value = null)
    {
        $this->Attributes = $value;

        return $this;
    }


}

