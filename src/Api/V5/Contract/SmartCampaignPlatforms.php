<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartCampaignPlatforms
{
    protected $Search = null;

    protected $Network = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see YesNoEnum
     */
    public function getSearch(): string
    {
        return $this->Search;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSearch(string $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getNetwork(): string
    {
        return $this->Network;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setNetwork(string $value)
    {
        $this->Network = $value;

        return $this;
    }
}
