<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class NewWordstatReportInfo
{

    protected $Phrases = array(
        
    );

    protected $GeoID = null;

    /**
     * Creates a new instance of NewWordstatReportInfo.
     *
     * @return NewWordstatReportInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Phrases.
     *
     * @return string[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets Phrases.
     *
     * @param array $value
     * @return $this
     */
    public function setPhrases(array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Gets GeoID.
     *
     * @return int[]|null
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * Sets GeoID.
     *
     * @param array|null $value
     * @return $this
     */
    public function setGeoID(array $value = null)
    {
        $this->GeoID = $value;

        return $this;
    }


}

