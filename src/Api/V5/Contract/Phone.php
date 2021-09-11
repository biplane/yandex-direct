<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Phone
{
    protected $CountryCode = null;

    protected $CityCode = null;

    protected $PhoneNumber = null;

//    Can be omit.
//    protected $Extension = null;

    /**
     * Creates a new instance of Phone.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CountryCode.
     */
    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * Sets CountryCode.
     *
     * @return $this
     */
    public function setCountryCode(string $value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    /**
     * Gets CityCode.
     */
    public function getCityCode(): string
    {
        return $this->CityCode;
    }

    /**
     * Sets CityCode.
     *
     * @return $this
     */
    public function setCityCode(string $value)
    {
        $this->CityCode = $value;

        return $this;
    }

    /**
     * Gets PhoneNumber.
     */
    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    /**
     * Sets PhoneNumber.
     *
     * @return $this
     */
    public function setPhoneNumber(string $value)
    {
        $this->PhoneNumber = $value;

        return $this;
    }

    /**
     * Gets Extension.
     */
    public function getExtension(): ?string
    {
        return $this->Extension ?? null;
    }

    /**
     * Sets Extension.
     *
     * @return $this
     */
    public function setExtension(?string $value = null)
    {
        $this->Extension = $value;

        return $this;
    }
}
