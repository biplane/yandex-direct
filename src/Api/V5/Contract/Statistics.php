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
    protected $Clicks = null;

    protected $Impressions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getClicks(): int
    {
        return $this->Clicks;
    }

    /**
     * @return $this
     */
    public function setClicks(int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    public function getImpressions(): int
    {
        return $this->Impressions;
    }

    /**
     * @return $this
     */
    public function setImpressions(int $value)
    {
        $this->Impressions = $value;

        return $this;
    }
}
