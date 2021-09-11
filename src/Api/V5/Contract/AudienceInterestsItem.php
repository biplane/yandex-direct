<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AudienceInterestsItem
{
    protected $InterestKey = null;

    protected $Id = null;

    protected $ParentId = null;

    protected $Name = null;

    protected $Description = null;

    protected $InterestType = null;

    /**
     * Creates a new instance of AudienceInterestsItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets InterestKey.
     */
    public function getInterestKey(): int
    {
        return $this->InterestKey;
    }

    /**
     * Sets InterestKey.
     *
     * @return $this
     */
    public function setInterestKey(int $value)
    {
        $this->InterestKey = $value;

        return $this;
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
     * Gets ParentId.
     */
    public function getParentId(): int
    {
        return $this->ParentId;
    }

    /**
     * Sets ParentId.
     *
     * @return $this
     */
    public function setParentId(int $value)
    {
        $this->ParentId = $value;

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

    /**
     * Gets InterestType.
     *
     * @see InterestTypeEnum
     */
    public function getInterestType(): string
    {
        return $this->InterestType;
    }

    /**
     * Sets InterestType.
     *
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
