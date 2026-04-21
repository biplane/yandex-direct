<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class EventsLogItem
{
    /** @var int|null */
    protected $CampaignID = null;

    /** @var int|null */
    protected $BannerID = null;

    /** @var int|null */
    protected $PhraseID = null;

    /** @var int|null */
    protected $AccountID = null;

    /** @var string|null */
    protected $TextDescription = null;

    /** @var string */
    protected $EventType;

    /** @var string */
    protected $Timestamp;

    /** @var string */
    protected $EventName;

    /** @var EventsLogItemAttributes|null */
    protected $Attributes = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get CampaignID
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Set CampaignID
     *
     * @return $this
     */
    public function setCampaignID(?int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Get BannerID
     */
    public function getBannerID(): ?int
    {
        return $this->BannerID;
    }

    /**
     * Set BannerID
     *
     * @return $this
     */
    public function setBannerID(?int $value)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Get PhraseID
     */
    public function getPhraseID(): ?int
    {
        return $this->PhraseID;
    }

    /**
     * Set PhraseID
     *
     * @return $this
     */
    public function setPhraseID(?int $value)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Get AccountID
     */
    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID
     *
     * @return $this
     */
    public function setAccountID(?int $value)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Get TextDescription
     */
    public function getTextDescription(): ?string
    {
        return $this->TextDescription;
    }

    /**
     * Set TextDescription
     *
     * @return $this
     */
    public function setTextDescription(?string $value)
    {
        $this->TextDescription = $value;

        return $this;
    }

    /**
     * Get EventType
     */
    public function getEventType(): string
    {
        return $this->EventType;
    }

    /**
     * Set EventType
     *
     * @return $this
     */
    public function setEventType(string $value)
    {
        $this->EventType = $value;

        return $this;
    }

    /**
     * Get Timestamp
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Set Timestamp
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    /**
     * Get EventName
     */
    public function getEventName(): string
    {
        return $this->EventName;
    }

    /**
     * Set EventName
     *
     * @return $this
     */
    public function setEventName(string $value)
    {
        $this->EventName = $value;

        return $this;
    }

    /**
     * Get Attributes
     */
    public function getAttributes(): ?EventsLogItemAttributes
    {
        return $this->Attributes;
    }

    /**
     * Set Attributes
     *
     * @return $this
     */
    public function setAttributes(?EventsLogItemAttributes $value)
    {
        $this->Attributes = $value;

        return $this;
    }
}
