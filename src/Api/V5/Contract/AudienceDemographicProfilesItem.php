<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceDemographicProfilesItem
{
    protected $Id = null;

    protected $Type = null;

    protected $Name = null;

    protected $Description = null;

    /**
     * Creates a new instance of AudienceDemographicProfilesItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Type.
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @return $this
     */
    public function setType(string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Description.
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }
}
