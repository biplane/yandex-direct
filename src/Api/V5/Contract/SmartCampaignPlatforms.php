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
    /** @var 'YES'|'NO' */
    protected $Search;

    /** @var 'YES'|'NO' */
    protected $Network;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Search
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getSearch(): string
    {
        return $this->Search;
    }

    /**
     * Set Search
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setSearch(string $value)
    {
        $this->Search = $value;

        return $this;
    }

    /**
     * Get Network
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getNetwork(): string
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setNetwork(string $value)
    {
        $this->Network = $value;

        return $this;
    }
}
