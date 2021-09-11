<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class NewWordstatReportInfo
{
    protected $Phrases = [];

    protected $GeoID = null;

    /**
     * Creates a new instance of NewWordstatReportInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Phrases.
     *
     * @return string[]
     */
    public function getPhrases(): array
    {
        return $this->Phrases;
    }

    /**
     * Sets Phrases.
     *
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
     * Gets GeoID.
     *
     * @return int[]|null
     */
    public function getGeoID(): ?array
    {
        return $this->GeoID;
    }

    /**
     * Sets GeoID.
     *
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
