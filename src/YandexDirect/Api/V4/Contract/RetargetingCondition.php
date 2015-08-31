<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingCondition
{
    /**
     * @var string
     */
    protected $IsAccessible;
    /**
     * @var string[]
     */
    protected $Fields;
    /**
     * @var string
     */
    protected $RetargetingConditionName;
    /**
     * @var string
     */
    protected $RetargetingConditionDescription;
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int
     */
    protected $RetargetingConditionID;
    /**
     * @var RetargetingConditionItem[]
     */
    protected $RetargetingCondition;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the IsAccessible.
     *
     * @return string
     */
    public function getIsAccessible()
    {
        return $this->IsAccessible;
    }

    /**
     * Sets the IsAccessible.
     *
     * @param string $IsAccessible
     *
     * @return RetargetingCondition
     */
    public function setIsAccessible($IsAccessible)
    {
        $this->IsAccessible = $IsAccessible;

        return $this;
    }

    /**
     * Gets the Fields.
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * Sets the Fields.
     *
     * @param string[] $Fields
     *
     * @return RetargetingCondition
     */
    public function setFields(array $Fields)
    {
        $this->Fields = $Fields;

        return $this;
    }

    /**
     * Gets the RetargetingConditionName.
     *
     * @return string
     */
    public function getRetargetingConditionName()
    {
        return $this->RetargetingConditionName;
    }

    /**
     * Sets the RetargetingConditionName.
     *
     * @param string $RetargetingConditionName
     *
     * @return RetargetingCondition
     */
    public function setRetargetingConditionName($RetargetingConditionName)
    {
        $this->RetargetingConditionName = $RetargetingConditionName;

        return $this;
    }

    /**
     * Gets the RetargetingConditionDescription.
     *
     * @return string
     */
    public function getRetargetingConditionDescription()
    {
        return $this->RetargetingConditionDescription;
    }

    /**
     * Sets the RetargetingConditionDescription.
     *
     * @param string $RetargetingConditionDescription
     *
     * @return RetargetingCondition
     */
    public function setRetargetingConditionDescription($RetargetingConditionDescription)
    {
        $this->RetargetingConditionDescription = $RetargetingConditionDescription;

        return $this;
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return RetargetingCondition
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the RetargetingConditionID.
     *
     * @return int
     */
    public function getRetargetingConditionID()
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets the RetargetingConditionID.
     *
     * @param int $RetargetingConditionID
     *
     * @return RetargetingCondition
     */
    public function setRetargetingConditionID($RetargetingConditionID)
    {
        $this->RetargetingConditionID = $RetargetingConditionID;

        return $this;
    }

    /**
     * Gets the RetargetingCondition.
     *
     * @return RetargetingConditionItem[]
     */
    public function getRetargetingCondition()
    {
        return $this->RetargetingCondition;
    }

    /**
     * Sets the RetargetingCondition.
     *
     * @param RetargetingConditionItem[] $RetargetingCondition
     *
     * @return RetargetingCondition
     */
    public function setRetargetingCondition(array $RetargetingCondition)
    {
        $this->RetargetingCondition = $RetargetingCondition;

        return $this;
    }
}