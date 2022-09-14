<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceInterestsItem
{
    protected $InterestKey = null;

    protected $Id = null;

    protected $ParentId = null;

    protected $Name = null;

    protected $Description = null;

    protected $InterestType = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getInterestKey(): int
    {
        return $this->InterestKey;
    }

    /**
     * @return $this
     */
    public function setInterestKey(int $value)
    {
        $this->InterestKey = $value;

        return $this;
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

    public function getParentId(): int
    {
        return $this->ParentId;
    }

    /**
     * @return $this
     */
    public function setParentId(int $value)
    {
        $this->ParentId = $value;

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

    /**
     * @see InterestTypeEnum
     */
    public function getInterestType(): string
    {
        return $this->InterestType;
    }

    /**
     * @see InterestTypeEnum
     *
     * @return $this
     */
    public function setInterestType(string $value)
    {
        $this->InterestType = $value;

        return $this;
    }
}
