<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListAddItem
{

    protected $Name = null;

    protected $Description = null;

    protected $Rules = [];

    /**
     * Creates a new instance of RetargetingListAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * Gets Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @param string|null $value
     * @return self
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Gets Rules.
     *
     * @return RetargetingListRuleItem[]
     */
    public function getRules()
    {
        return $this->Rules;
    }

    /**
     * Sets Rules.
     *
     * @param RetargetingListRuleItem[] $value
     * @return self
     */
    public function setRules(array $value)
    {
        $this->Rules = $value;

        return $this;
    }


}

