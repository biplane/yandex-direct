<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class InterestsItem
{
    /** @var int */
    protected $InterestId;

    /** @var int|null */
    protected $ParentId = null;

    /** @var string */
    protected $Name;

    /** @var 'YES'|'NO' */
    protected $IsTargetable;

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
     * Get InterestId
     */
    public function getInterestId(): int
    {
        return $this->InterestId;
    }

    /**
     * Set InterestId
     *
     * @return $this
     */
    public function setInterestId(int $value)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * Get ParentId
     */
    public function getParentId(): ?int
    {
        return $this->ParentId;
    }

    /**
     * Set ParentId
     *
     * @return $this
     */
    public function setParentId(?int $value)
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
     * Get IsTargetable
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getIsTargetable(): string
    {
        return $this->IsTargetable;
    }

    /**
     * Set IsTargetable
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setIsTargetable(string $value)
    {
        $this->IsTargetable = $value;

        return $this;
    }
}
