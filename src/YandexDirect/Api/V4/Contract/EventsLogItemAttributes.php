<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class EventsLogItemAttributes
{
    /**
     * @var string
     */
    protected $ModerationResult;
    /**
     * @var float
     */
    protected $MinPrice;
    /**
     * @var float
     */
    protected $Rest;
    /**
     * @var float
     */
    protected $Payed;
    /**
     * @var string
     */
    protected $FinishDate;
    /**
     * @var string
     */
    protected $OldPlace;
    /**
     * @var string
     */
    protected $IsEditedByModerator;
    /**
     * @var string
     */
    protected $StopTime;
    /**
     * @var string
     */
    protected $Currency;

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
     * Gets the ModerationResult.
     *
     * @return string
     */
    public function getModerationResult()
    {
        return $this->ModerationResult;
    }

    /**
     * Sets the ModerationResult.
     *
     * @param string $ModerationResult
     *
     * @return EventsLogItemAttributes
     */
    public function setModerationResult($ModerationResult)
    {
        $this->ModerationResult = $ModerationResult;

        return $this;
    }

    /**
     * Gets the MinPrice.
     *
     * @return float
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * Sets the MinPrice.
     *
     * @param float $MinPrice
     *
     * @return EventsLogItemAttributes
     */
    public function setMinPrice($MinPrice)
    {
        $this->MinPrice = $MinPrice;

        return $this;
    }

    /**
     * Gets the Rest.
     *
     * @return float
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * Sets the Rest.
     *
     * @param float $Rest
     *
     * @return EventsLogItemAttributes
     */
    public function setRest($Rest)
    {
        $this->Rest = $Rest;

        return $this;
    }

    /**
     * Gets the Payed.
     *
     * @return float
     */
    public function getPayed()
    {
        return $this->Payed;
    }

    /**
     * Sets the Payed.
     *
     * @param float $Payed
     *
     * @return EventsLogItemAttributes
     */
    public function setPayed($Payed)
    {
        $this->Payed = $Payed;

        return $this;
    }

    /**
     * Gets the FinishDate.
     *
     * @return string
     */
    public function getFinishDate()
    {
        return $this->FinishDate;
    }

    /**
     * Sets the FinishDate.
     *
     * @param string $FinishDate
     *
     * @return EventsLogItemAttributes
     */
    public function setFinishDate($FinishDate)
    {
        $this->FinishDate = $FinishDate;

        return $this;
    }

    /**
     * Gets the OldPlace.
     *
     * @return string
     */
    public function getOldPlace()
    {
        return $this->OldPlace;
    }

    /**
     * Sets the OldPlace.
     *
     * @param string $OldPlace
     *
     * @return EventsLogItemAttributes
     */
    public function setOldPlace($OldPlace)
    {
        $this->OldPlace = $OldPlace;

        return $this;
    }

    /**
     * Gets the IsEditedByModerator.
     *
     * @return string
     */
    public function getIsEditedByModerator()
    {
        return $this->IsEditedByModerator;
    }

    /**
     * Sets the IsEditedByModerator.
     *
     * @param string $IsEditedByModerator
     *
     * @return EventsLogItemAttributes
     */
    public function setIsEditedByModerator($IsEditedByModerator)
    {
        $this->IsEditedByModerator = $IsEditedByModerator;

        return $this;
    }

    /**
     * Gets the StopTime.
     *
     * @return string
     */
    public function getStopTime()
    {
        return $this->StopTime;
    }

    /**
     * Sets the StopTime.
     *
     * @param string $StopTime
     *
     * @return EventsLogItemAttributes
     */
    public function setStopTime($StopTime)
    {
        $this->StopTime = $StopTime;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return EventsLogItemAttributes
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}