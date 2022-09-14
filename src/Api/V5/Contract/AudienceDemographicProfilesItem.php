<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceDemographicProfilesItem
{
    protected $Id = null;

    protected $Type = null;

    protected $Name = null;

    protected $Description = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }
}
