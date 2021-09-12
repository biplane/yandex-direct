<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckDictionariesResponse
{
//    Can be omitted.
//    protected $TimeZonesChanged = null;

//    Can be omitted.
//    protected $RegionsChanged = null;

//    Can be omitted.
//    protected $InterestsChanged = null;

    protected $Timestamp = null;

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
    public function getTimeZonesChanged(): ?string
    {
        return $this->TimeZonesChanged ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getRegionsChanged(): ?string
    {
        return $this->RegionsChanged ?? null;
    }

    /**
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
     * @see YesNoEnum
     */
    public function getInterestsChanged(): ?string
    {
        return $this->InterestsChanged ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setInterestsChanged(?string $value = null)
    {
        $this->InterestsChanged = $value;

        return $this;
    }

    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
