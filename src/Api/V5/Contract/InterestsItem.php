<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets InterestId.
     *
     * @return int
     */
    public function getInterestId()
    {
        return $this->InterestId;
    }

    /**
     * Sets InterestId.
     *
     * @param int $value
     * @return self
     */
    public function setInterestId($value)
    {
        $this->InterestId = $value;

        return $this;
    }

    /**
     * Gets ParentId.
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->ParentId;
    }

    /**
     * Sets ParentId.
     *
     * @param int|null $value
     * @return self
     */
    public function setParentId($value = null)
    {
        $this->ParentId = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return self
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets IsTargetable.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getIsTargetable()
    {
        return $this->IsTargetable;
    }

    /**
     * Sets IsTargetable.
     *
     * @param string $value
     * @return self
     * @see YesNoEnum
     */
    public function setIsTargetable($value)
    {
        $this->IsTargetable = $value;

        return $this;
    }


}

