<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckDictionariesResponse
{
//    Can be omit.
//    protected $TimeZonesChanged = null;

//    Can be omit.
//    protected $RegionsChanged = null;

//    Can be omit.
//    protected $InterestsChanged = null;

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckDictionariesResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TimeZonesChanged.
     *
     * @see YesNoEnum
     */
    public function getTimeZonesChanged(): ?string
    {
        return $this->TimeZonesChanged ?? null;
    }

    /**
     * Sets TimeZonesChanged.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setTimeZonesChanged(?string $value = null)
    {
        $this->TimeZonesChanged = $value;

        return $this;
    }

    /**
     * Gets RegionsChanged.
     *
     * @see YesNoEnum
     */
    public function getRegionsChanged(): ?string
    {
        return $this->RegionsChanged ?? null;
    }

    /**
     * Sets RegionsChanged.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setRegionsChanged(?string $value = null)
    {
        $this->RegionsChanged = $value;

        return $this;
    }

    /**
     * Gets InterestsChanged.
     *
     * @see YesNoEnum
     */
    public function getInterestsChanged(): ?string
    {
        return $this->InterestsChanged ?? null;
    }

    /**
     * Sets InterestsChanged.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setInterestsChanged(?string $value = null)
    {
        $this->InterestsChanged = $value;

        return $this;
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
