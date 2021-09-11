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
     * Creates a new instance of EventsLogItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): ?int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(?int $value = null)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets BannerID.
     */
    public function getBannerID(): ?int
    {
        return $this->BannerID;
    }

    /**
     * Sets BannerID.
     *
     * @return $this
     */
    public function setBannerID(?int $value = null)
    {
        $this->BannerID = $value;

        return $this;
    }

    /**
     * Gets PhraseID.
     */
    public function getPhraseID(): ?int
    {
        return $this->PhraseID;
    }

    /**
     * Sets PhraseID.
     *
     * @return $this
     */
    public function setPhraseID(?int $value = null)
    {
        $this->PhraseID = $value;

        return $this;
    }

    /**
     * Gets AccountID.
     */
    public function getAccountID(): ?int
    {
        return $this->AccountID;
    }

    /**
     * Sets AccountID.
     *
     * @return $this
     */
    public function setAccountID(?int $value = null)
    {
        $this->AccountID = $value;

        return $this;
    }

    /**
     * Gets TextDescription.
     */
    public function getTextDescription(): ?string
    {
        return $this->TextDescription;
    }

    /**
     * Sets TextDescription.
     *
     * @return $this
     */
    public function setTextDescription(?string $value = null)
    {
        $this->TextDescription = $value;

        return $this;
    }

    /**
     * Gets EventType.
     */
    public function getEventType(): string
    {
        return $this->EventType;
    }

    /**
     * Sets EventType.
     *
     * @return $this
     */
    public function setEventType(string $value)
    {
        $this->EventType = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }

    /**
     * Gets EventName.
     */
    public function getEventName(): string
    {
        return $this->EventName;
    }

    /**
     * Sets EventName.
     *
     * @return $this
     */
    public function setEventName(string $value)
    {
        $this->EventName = $value;

        return $this;
    }

    /**
     * Gets Attributes.
     */
    public function getAttributes(): ?EventsLogItemAttributes
    {
        return $this->Attributes;
    }

    /**
     * Sets Attributes.
     *
     * @return $this
     */
    public function setAttributes(?EventsLogItemAttributes $value = null)
    {
        $this->Attributes = $value;

        return $this;
    }
}
