<?php

declare(strict_types=1);

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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    public function getBannerID(): ?int
    {
        return $this->BannerID;
    }

    /**
     * @return $this
     */
    public function setBannerID(?int $value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    public function getPhraseID(): ?int
    {
        return $this->PhraseID;
    }

    /**
     * @return $this
     */
    public function setPhraseID(?int $value = null)
    {
        $this->PhraseID = $value;

        return $this;
    }

    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * @return $this
     */
    public function setAccountID(?int $value = null)
    {
        $this->AccountID = $value;

        return $this;
    }

    public function getTextDescription(): ?string
    {
        return $this->TextDescription;
    }

    /**
     * @return $this
     */
    public function setTextDescription(?string $value = null)
    {
        $this->TextDescription = $value;

        return $this;
    }

    public function getEventType(): string
    {
        return $this->EventType;
    }

    /**
     * @return $this
     */
    public function setEventType(string $value)
    {
        $this->EventType = $value;

        return $this;
    }

    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    public function getEventName(): string
    {
        return $this->EventName;
    }

    /**
     * @return $this
     */
    public function setEventName(string $value)
    {
        $this->EventName = $value;

        return $this;
    }

    public function getAttributes(): ?EventsLogItemAttributes
    {
        return $this->Attributes;
    }

    /**
     * @return $this
     */
    public function setAttributes(?EventsLogItemAttributes $value = null)
    {
        $this->Attributes = $value;

        return $this;
    }
}
