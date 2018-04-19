<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckDictionariesResponse
{

//    Can be omit.
//    protected $TimeZonesChanged = null;

//    Can be omit.
//    protected $RegionsChanged = null;

//    Can be omit.
//    protected $InterestsChanged = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckDictionariesResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TimeZonesChanged.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getTimeZonesChanged()
    {
        return isset($this->TimeZonesChanged) ? $this->TimeZonesChanged : null;
    }

    /**
     * Sets TimeZonesChanged.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setTimeZonesChanged($value = null)
    {
        $this->TimeZonesChanged = $value;

        return $this;
    }

    /**
     * Gets RegionsChanged.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getRegionsChanged()
    {
        return isset($this->RegionsChanged) ? $this->RegionsChanged : null;
    }

    /**
     * Sets RegionsChanged.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setRegionsChanged($value = null)
    {
        $this->RegionsChanged = $value;

        return $this;
    }

    /**
     * Gets InterestsChanged.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getInterestsChanged()
    {
        return isset($this->InterestsChanged) ? $this->InterestsChanged : null;
    }

    /**
     * Sets InterestsChanged.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setInterestsChanged($value = null)
    {
        $this->InterestsChanged = $value;

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
     * @return self
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

