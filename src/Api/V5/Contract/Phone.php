<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Phone
{
    /** @var string */
    protected $CountryCode;

    /** @var string */
    protected $CityCode;

    /** @var string */
    protected $PhoneNumber;

//    Can be omitted.
//    protected $Extension;

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
     * Get CountryCode
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * Set CountryCode
     *
     * @return $this
     */
    public function setCountryCode(string $value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    /**
     * Get CityCode
     */
    public function getCityCode(): string
    {
        return $this->CityCode;
    }

    /**
     * Set CityCode
     *
     * @return $this
     */
    public function setCityCode(string $value)
    {
        $this->CityCode = $value;

        return $this;
    }

    /**
     * Get PhoneNumber
     */
    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    /**
     * Set PhoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber(string $value)
    {
        $this->PhoneNumber = $value;

        return $this;
    }

    /**
     * Get Extension
     */
    public function getExtension(): ?string
    {
        return $this->Extension ?? null;
    }

    /**
     * Set Extension
     *
     * @return $this
     */
    public function setExtension(?string $value)
    {
        $this->Extension = $value;

        return $this;
    }
}
