<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NewWordstatReportInfo
{
//    Can be omitted.
//    protected $Phrases;

//    Can be omitted.
//    protected $GeoID;

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
     * Get Phrases
     *
     * @return list<string>
     */
    public function getPhrases(): array
    {
        return $this->Phrases ?? [];
    }

    /**
     * Set Phrases
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setPhrases(array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Get GeoID
     *
     * @return list<int>|null
     */
    public function getGeoID(): ?array
    {
        return $this->GeoID ?? null;
    }

    /**
     * Set GeoID
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setGeoID(?array $value)
    {
        $this->GeoID = $value;

        return $this;
    }
}
