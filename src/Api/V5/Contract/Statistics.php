<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Statistics
{

    protected $Clicks = null;

    protected $Impressions = null;

    /**
     * Creates a new instance of Statistics.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @param int $value
     * @return $this
     */
    public function setClicks($value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets Impressions.
     *
     * @return int
     */
    public function getImpressions()
    {
        return $this->Impressions;
    }

    /**
     * Sets Impressions.
     *
     * @param int $value
     * @return $this
     */
    public function setImpressions($value)
    {
        $this->Impressions = $value;

        return $this;
    }


}

