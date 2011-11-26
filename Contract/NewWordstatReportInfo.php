<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * @param string[] $Phrases
     * @return NewWordstatReportInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * @param int[] $GeoID
     * @return NewWordstatReportInfo
     */
    public function setGeoID(array $GeoID)
    {
        $this->GeoID = $GeoID;

        return $this;
    }
}