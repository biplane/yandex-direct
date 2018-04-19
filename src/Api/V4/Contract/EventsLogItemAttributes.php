<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ModerationResult.
     *
     * @return string|null
     */
    public function getModerationResult()
    {
        return $this->ModerationResult;
    }

    /**
     * Sets ModerationResult.
     *
     * @param string|null $value
     * @return $this
     */
    public function setModerationResult($value = null)
    {
        $this->ModerationResult = $value;

        return $this;
    }

    /**
     * Gets MinPrice.
     *
     * @return float|null
     */
    public function getMinPrice()
    {
        return $this->MinPrice;
    }

    /**
     * Sets MinPrice.
     *
     * @param float|null $value
     * @return $this
     */
    public function setMinPrice($value = null)
    {
        $this->MinPrice = $value;

        return $this;
    }

    /**
     * Gets Rest.
     *
     * @return float|null
     */
    public function getRest()
    {
        return $this->Rest;
    }

    /**
     * Sets Rest.
     *
     * @param float|null $value
     * @return $this
     */
    public function setRest($value = null)
    {
        $this->Rest = $value;

        return $this;
    }

    /**
     * Gets Payed.
     *
     * @return float|null
     */
    public function getPayed()
    {
        return $this->Payed;
    }

    /**
     * Sets Payed.
     *
     * @param float|null $value
     * @return $this
     */
    public function setPayed($value = null)
    {
        $this->Payed = $value;

        return $this;
    }

    /**
     * Gets FinishDate.
     *
     * @return string|null
     */
    public function getFinishDate()
    {
        return $this->FinishDate;
    }

    /**
     * Sets FinishDate.
     *
     * @param string|null $value
     * @return $this
     */
    public function setFinishDate($value = null)
    {
        $this->FinishDate = $value;

        return $this;
    }

    /**
     * Gets OldPlace.
     *
     * @return string|null
     */
    public function getOldPlace()
    {
        return $this->OldPlace;
    }

    /**
     * Sets OldPlace.
     *
     * @param string|null $value
     * @return $this
     */
    public function setOldPlace($value = null)
    {
        $this->OldPlace = $value;

        return $this;
    }

    /**
     * Gets IsEditedByModerator.
     *
     * @return string|null
     */
    public function getIsEditedByModerator()
    {
        return $this->IsEditedByModerator;
    }

    /**
     * Sets IsEditedByModerator.
     *
     * @param string|null $value
     * @return $this
     */
    public function setIsEditedByModerator($value = null)
    {
        $this->IsEditedByModerator = $value;

        return $this;
    }

    /**
     * Gets StopTime.
     *
     * @return string|null
     */
    public function getStopTime()
    {
        return $this->StopTime;
    }

    /**
     * Sets StopTime.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStopTime($value = null)
    {
        $this->StopTime = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

