<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class EventsLogItemAttributes
{
    /** @var string|null */
    protected $ModerationResult = null;

    /** @var float|null */
    protected $MinPrice = null;

    /** @var float|null */
    protected $Rest = null;

    /** @var float|null */
    protected $Payed = null;

    /** @var string|null */
    protected $FinishDate = null;

    /** @var string|null */
    protected $OldPlace = null;

    /** @var string|null */
    protected $IsEditedByModerator = null;

    /** @var string|null */
    protected $StopTime = null;

    /** @var string|null */
    protected $Currency = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ModerationResult
     */
    public function getModerationResult(): ?string
    {
        return $this->ModerationResult;
    }

    /**
     * Set ModerationResult
     *
     * @return $this
     */
    public function setModerationResult(?string $value)
    {
        $this->ModerationResult = $value;

        return $this;
    }

    /**
     * Get MinPrice
     */
    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }

    /**
     * Set MinPrice
     *
     * @return $this
     */
    public function setMinPrice(?float $value)
    {
        $this->MinPrice = $value;

        return $this;
    }

    /**
     * Get Rest
     */
    public function getRest(): ?float
    {
        return $this->Rest;
    }

    /**
     * Set Rest
     *
     * @return $this
     */
    public function setRest(?float $value)
    {
        $this->Rest = $value;

        return $this;
    }

    /**
     * Get Payed
     */
    public function getPayed(): ?float
    {
        return $this->Payed;
    }

    /**
     * Set Payed
     *
     * @return $this
     */
    public function setPayed(?float $value)
    {
        $this->Payed = $value;

        return $this;
    }

    /**
     * Get FinishDate
     */
    public function getFinishDate(): ?string
    {
        return $this->FinishDate;
    }

    /**
     * Set FinishDate
     *
     * @return $this
     */
    public function setFinishDate(?string $value)
    {
        $this->FinishDate = $value;

        return $this;
    }

    /**
     * Get OldPlace
     */
    public function getOldPlace(): ?string
    {
        return $this->OldPlace;
    }

    /**
     * Set OldPlace
     *
     * @return $this
     */
    public function setOldPlace(?string $value)
    {
        $this->OldPlace = $value;

        return $this;
    }

    /**
     * Get IsEditedByModerator
     */
    public function getIsEditedByModerator(): ?string
    {
        return $this->IsEditedByModerator;
    }

    /**
     * Set IsEditedByModerator
     *
     * @return $this
     */
    public function setIsEditedByModerator(?string $value)
    {
        $this->IsEditedByModerator = $value;

        return $this;
    }

    /**
     * Get StopTime
     */
    public function getStopTime(): ?string
    {
        return $this->StopTime;
    }

    /**
     * Set StopTime
     *
     * @return $this
     */
    public function setStopTime(?string $value)
    {
        $this->StopTime = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }
}
