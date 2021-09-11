<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class EventsLogItemAttributes
{
    protected $ModerationResult = null;

    protected $MinPrice = null;

    protected $Rest = null;

    protected $Payed = null;

    protected $FinishDate = null;

    protected $OldPlace = null;

    protected $IsEditedByModerator = null;

    protected $StopTime = null;

    protected $Currency = null;

    /**
     * Creates a new instance of EventsLogItemAttributes.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ModerationResult.
     */
    public function getModerationResult(): ?string
    {
        return $this->ModerationResult;
    }

    /**
     * Sets ModerationResult.
     *
     * @return $this
     */
    public function setModerationResult(?string $value = null)
    {
        $this->ModerationResult = $value;

        return $this;
    }

    /**
     * Gets MinPrice.
     */
    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }

    /**
     * Sets MinPrice.
     *
     * @return $this
     */
    public function setMinPrice(?float $value = null)
    {
        $this->MinPrice = $value;

        return $this;
    }

    /**
     * Gets Rest.
     */
    public function getRest(): ?float
    {
        return $this->Rest;
    }

    /**
     * Sets Rest.
     *
     * @return $this
     */
    public function setRest(?float $value = null)
    {
        $this->Rest = $value;

        return $this;
    }

    /**
     * Gets Payed.
     */
    public function getPayed(): ?float
    {
        return $this->Payed;
    }

    /**
     * Sets Payed.
     *
     * @return $this
     */
    public function setPayed(?float $value = null)
    {
        $this->Payed = $value;

        return $this;
    }

    /**
     * Gets FinishDate.
     */
    public function getFinishDate(): ?string
    {
        return $this->FinishDate;
    }

    /**
     * Sets FinishDate.
     *
     * @return $this
     */
    public function setFinishDate(?string $value = null)
    {
        $this->FinishDate = $value;

        return $this;
    }

    /**
     * Gets OldPlace.
     */
    public function getOldPlace(): ?string
    {
        return $this->OldPlace;
    }

    /**
     * Sets OldPlace.
     *
     * @return $this
     */
    public function setOldPlace(?string $value = null)
    {
        $this->OldPlace = $value;

        return $this;
    }

    /**
     * Gets IsEditedByModerator.
     */
    public function getIsEditedByModerator(): ?string
    {
        return $this->IsEditedByModerator;
    }

    /**
     * Sets IsEditedByModerator.
     *
     * @return $this
     */
    public function setIsEditedByModerator(?string $value = null)
    {
        $this->IsEditedByModerator = $value;

        return $this;
    }

    /**
     * Gets StopTime.
     */
    public function getStopTime(): ?string
    {
        return $this->StopTime;
    }

    /**
     * Sets StopTime.
     *
     * @return $this
     */
    public function setStopTime(?string $value = null)
    {
        $this->StopTime = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
