<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckDictionariesResponse
{
//    Can be omitted.
//    protected $TimeZonesChanged;

//    Can be omitted.
//    protected $RegionsChanged;

//    Can be omitted.
//    protected $InterestsChanged;

    /** @var string */
    protected $Timestamp;

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
     * Get TimeZonesChanged
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getTimeZonesChanged(): ?string
    {
        return $this->TimeZonesChanged ?? null;
    }

    /**
     * Set TimeZonesChanged
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setTimeZonesChanged(?string $value)
    {
        $this->TimeZonesChanged = $value;

        return $this;
    }

    /**
     * Get RegionsChanged
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getRegionsChanged(): ?string
    {
        return $this->RegionsChanged ?? null;
    }

    /**
     * Set RegionsChanged
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setRegionsChanged(?string $value)
    {
        $this->RegionsChanged = $value;

        return $this;
    }

    /**
     * Get InterestsChanged
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getInterestsChanged(): ?string
    {
        return $this->InterestsChanged ?? null;
    }

    /**
     * Set InterestsChanged
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setInterestsChanged(?string $value)
    {
        $this->InterestsChanged = $value;

        return $this;
    }

    /**
     * Get Timestamp
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Set Timestamp
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
