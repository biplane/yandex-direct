<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class InterestsItem
{
    protected $InterestId = null;

    protected $ParentId = null;

    protected $Name = null;

    protected $IsTargetable = null;

    /**
     * Creates a new instance of InterestsItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets InterestId.
     */
    public function getInterestId(): int
    {
        return $this->InterestId;
    }

    /**
     * Sets InterestId.
     *
     * @return $this
     */
    public function setInterestId(int $value)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * Gets ParentId.
     */
    public function getParentId(): ?int
    {
        return $this->ParentId;
    }

    /**
     * Sets ParentId.
     *
     * @return $this
     */
    public function setParentId(?int $value = null)
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
     * Gets IsTargetable.
     *
     * @see YesNoEnum
     */
    public function getIsTargetable(): string
    {
        return $this->IsTargetable;
    }

    /**
     * Sets IsTargetable.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setIsTargetable(string $value)
    {
        $this->IsTargetable = $value;

        return $this;
    }
}
