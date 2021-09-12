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

//    Can be omitted.
//    protected $Extension = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCountryCode(): string
    {
        return $this->CountryCode;
    }

    /**
     * @return $this
     */
    public function setCountryCode(string $value)
    {
        $this->CountryCode = $value;

        return $this;
    }

    public function getCityCode(): string
    {
        return $this->CityCode;
    }

    /**
     * @return $this
     */
    public function setCityCode(string $value)
    {
        $this->CityCode = $value;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->PhoneNumber;
    }

    /**
     * @return $this
     */
    public function setPhoneNumber(string $value)
    {
        $this->PhoneNumber = $value;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->Extension ?? null;
    }

    /**
     * @return $this
     */
    public function setExtension(?string $value = null)
    {
        $this->Extension = $value;

        return $this;
    }
}
