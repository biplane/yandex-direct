<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class NewWordstatReportInfo
{
    /**
     * @var string[]
     */
    protected $Phrases;
    /**
     * @var int[]
     */
    protected $GeoID;

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
     * Gets the Phrases.
     *
     * @return string[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets the Phrases.
     *
     * @param string[] $Phrases
     *
     * @return NewWordstatReportInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

        return $this;
    }

    /**
     * Gets the GeoID.
     *
     * @return int[]
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * Sets the GeoID.
     *
     * @param int[] $GeoID
     *
     * @return NewWordstatReportInfo
     */
    public function setGeoID(array $GeoID)
    {
        $this->GeoID = $GeoID;

        return $this;
    }
}