<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @var date
     */
    protected $FinishDate;
    /**
     * @var string
     */
    protected $OldPlace;

    /**
     * @return string
     */
    public function getModerationResult()
    {
        return $this->ModerationResult;
    }

    /**
     * @param string $ModerationResult
     * @return EventsLogItemAttributes
     */
    public function setModerationResult($ModerationResult)
    {
        $this->ModerationResult = $ModerationResult;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * @param float $MinPrice
     * @return EventsLogItemAttributes
     */
    public function setMinPrice($MinPrice)
    {
        $this->MinPrice = $MinPrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * @param float $Rest
     * @return EventsLogItemAttributes
     */
    public function setRest($Rest)
    {
        $this->Rest = $Rest;

        return $this;
    }

    /**
     * @return float
     */
    public function getPayed()
    {
        return $this->Payed;
    }

    /**
     * @param float $Payed
     * @return EventsLogItemAttributes
     */
    public function setPayed($Payed)
    {
        $this->Payed = $Payed;

        return $this;
    }

    /**
     * @return date
     */
    public function getFinishDate()
    {
        return $this->FinishDate;
    }

    /**
     * @param date $FinishDate
     * @return EventsLogItemAttributes
     */
    public function setFinishDate($FinishDate)
    {
        $this->FinishDate = $FinishDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOldPlace()
    {
        return $this->OldPlace;
    }

    /**
     * @param string $OldPlace
     * @return EventsLogItemAttributes
     */
    public function setOldPlace($OldPlace)
    {
        $this->OldPlace = $OldPlace;

        return $this;
    }
}