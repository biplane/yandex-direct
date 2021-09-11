<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Clicks.
     */
    public function getClicks(): int
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @return $this
     */
    public function setClicks(int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets Impressions.
     */
    public function getImpressions(): int
    {
        return $this->Impressions;
    }

    /**
     * Sets Impressions.
     *
     * @return $this
     */
    public function setImpressions(int $value)
    {
        $this->Impressions = $value;

        return $this;
    }
}
