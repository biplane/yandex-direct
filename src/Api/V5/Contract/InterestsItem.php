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
    protected $InterestId = null;

    protected $ParentId = null;

    protected $Name = null;

    protected $IsTargetable = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getInterestId(): int
    {
        return $this->InterestId;
    }

    /**
     * @return $this
     */
    public function setInterestId(int $value)
    {
        $this->InterestId = $value;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->ParentId;
    }

    /**
     * @return $this
     */
    public function setParentId(?int $value = null)
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

    /**
     * @see YesNoEnum
     */
    public function getIsTargetable(): string
    {
        return $this->IsTargetable;
    }

    /**
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
