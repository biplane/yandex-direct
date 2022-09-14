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
    protected $Phrases = [];

    protected $GeoID = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return string[]
     */
    public function getPhrases(): array
    {
        return $this->Phrases;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setPhrases(array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getGeoID(): ?array
    {
        return $this->GeoID;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setGeoID(?array $value = null)
    {
        $this->GeoID = $value;

        return $this;
    }
}
