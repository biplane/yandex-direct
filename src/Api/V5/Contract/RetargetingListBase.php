<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListBase
{

    protected $Name = null;

    protected $Description = null;

    protected $Rules = null;

    /**
     * Creates a new instance of RetargetingListBase.
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
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return self
     */
    public function setName($value = null)
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
     * @return RetargetingListRuleItem[]|null
     */
    public function getRules()
    {
        return $this->Rules;
    }

    /**
     * Sets Rules.
     *
     * @param RetargetingListRuleItem[]|null $value
     * @return self
     */
    public function setRules(array $value = null)
    {
        $this->Rules = $value;

        return $this;
    }


}

