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
    /** @var int */
    protected $InterestKey;

    /** @var int */
    protected $Id;

    /** @var int */
    protected $ParentId;

    /** @var string */
    protected $Name;

    /** @var string */
    protected $Description;

    /** @var 'SHORT_TERM'|'LONG_TERM'|'ANY' */
    protected $InterestType;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get InterestKey
     */
    public function getInterestKey(): int
    {
        return $this->InterestKey;
    }

    /**
     * Set InterestKey
     *
     * @return $this
     */
    public function setInterestKey(int $value)
    {
        $this->InterestKey = $value;

        return $this;
    }

    /**
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get ParentId
     */
    public function getParentId(): int
    {
        return $this->ParentId;
    }

    /**
     * Set ParentId
     *
     * @return $this
     */
    public function setParentId(int $value)
    {
        $this->ParentId = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get Description
     */
    public function getDescription(): string
    {
        return $this->Description;
    }

    /**
     * Set Description
     *
     * @return $this
     */
    public function setDescription(string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Get InterestType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\InterestTypeEnum
     *
     * @return 'SHORT_TERM'|'LONG_TERM'|'ANY'
     */
    public function getInterestType(): string
    {
        return $this->InterestType;
    }

    /**
     * Set InterestType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\InterestTypeEnum
     *
     * @param 'SHORT_TERM'|'LONG_TERM'|'ANY' $value
     *
     * @return $this
     */
    public function setInterestType(string $value)
    {
        $this->InterestType = $value;

        return $this;
    }
}
