<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckDictionariesResponse
{

    protected $TimeZonesChanged = null;

    protected $RegionsChanged = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckDictionariesResponse.
     *
     * @return CheckDictionariesResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TimeZonesChanged.
     *
     * @return YesNoEnum|null
     */
    public function getTimeZonesChanged()
    {
        return $this->TimeZonesChanged;
    }

    /**
     * Sets TimeZonesChanged.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setTimeZonesChanged(YesNoEnum $value = null)
    {
        $this->TimeZonesChanged = $value;

        return $this;
    }

    /**
     * Gets RegionsChanged.
     *
     * @return YesNoEnum|null
     */
    public function getRegionsChanged()
    {
        return $this->RegionsChanged;
    }

    /**
     * Sets RegionsChanged.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setRegionsChanged(YesNoEnum $value = null)
    {
        $this->RegionsChanged = $value;

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
     * @return $this
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

