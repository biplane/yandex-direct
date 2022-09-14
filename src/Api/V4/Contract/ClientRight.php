<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientRight
{
    protected $RightName = null;

    protected $Value = null;

    protected $AgencyName = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRightName(): string
    {
        return $this->RightName;
    }

    /**
     * @return $this
     */
    public function setRightName(string $value)
    {
        $this->RightName = $value;

        return $this;
    }

    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }

    public function getAgencyName(): ?string
    {
        return $this->AgencyName;
    }

    /**
     * @return $this
     */
    public function setAgencyName(?string $value = null)
    {
        $this->AgencyName = $value;

        return $this;
    }
}
