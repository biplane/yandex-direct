<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Statistics
{
    /** @var int */
    protected $Clicks;

    /** @var int */
    protected $Impressions;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Clicks
     */
    public function getClicks(): int
    {
        return $this->Clicks;
    }

    /**
     * Set Clicks
     *
     * @return $this
     */
    public function setClicks(int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Get Impressions
     */
    public function getImpressions(): int
    {
        return $this->Impressions;
    }

    /**
     * Set Impressions
     *
     * @return $this
     */
    public function setImpressions(int $value)
    {
        $this->Impressions = $value;

        return $this;
    }
}
