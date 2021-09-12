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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getModerationResult(): ?string
    {
        return $this->ModerationResult;
    }

    /**
     * @return $this
     */
    public function setModerationResult(?string $value = null)
    {
        $this->ModerationResult = $value;

        return $this;
    }

    public function getMinPrice(): ?float
    {
        return $this->MinPrice;
    }

    /**
     * @return $this
     */
    public function setMinPrice(?float $value = null)
    {
        $this->MinPrice = $value;

        return $this;
    }

    public function getRest(): ?float
    {
        return $this->Rest;
    }

    /**
     * @return $this
     */
    public function setRest(?float $value = null)
    {
        $this->Rest = $value;

        return $this;
    }

    public function getPayed(): ?float
    {
        return $this->Payed;
    }

    /**
     * @return $this
     */
    public function setPayed(?float $value = null)
    {
        $this->Payed = $value;

        return $this;
    }

    public function getFinishDate(): ?string
    {
        return $this->FinishDate;
    }

    /**
     * @return $this
     */
    public function setFinishDate(?string $value = null)
    {
        $this->FinishDate = $value;

        return $this;
    }

    public function getOldPlace(): ?string
    {
        return $this->OldPlace;
    }

    /**
     * @return $this
     */
    public function setOldPlace(?string $value = null)
    {
        $this->OldPlace = $value;

        return $this;
    }

    public function getIsEditedByModerator(): ?string
    {
        return $this->IsEditedByModerator;
    }

    /**
     * @return $this
     */
    public function setIsEditedByModerator(?string $value = null)
    {
        $this->IsEditedByModerator = $value;

        return $this;
    }

    public function getStopTime(): ?string
    {
        return $this->StopTime;
    }

    /**
     * @return $this
     */
    public function setStopTime(?string $value = null)
    {
        $this->StopTime = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
