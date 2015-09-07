<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingCondition
{

    protected $IsAccessible = null;

    protected $Fields = null;

    protected $RetargetingConditionName = null;

    protected $RetargetingConditionDescription = null;

    protected $Login = null;

    protected $RetargetingConditionID = null;

    protected $RetargetingCondition = null;

    /**
     * Creates a new instance of RetargetingCondition.
     *
     * @return RetargetingCondition
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets IsAccessible.
     *
     * @return string|null
     */
    public function getIsAccessible()
    {
        return $this->IsAccessible;
    }

    /**
     * Sets IsAccessible.
     *
     * @param string|null $value
     * @return $this
     */
    public function setIsAccessible($value = null)
    {
        $this->IsAccessible = $value;

        return $this;
    }

    /**
     * Gets Fields.
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->Fields;
    }

    /**
     * Sets Fields.
     *
     * @param array|null $value
     * @return $this
     */
    public function setFields(array $value = null)
    {
        $this->Fields = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditionName.
     *
     * @return string|null
     */
    public function getRetargetingConditionName()
    {
        return $this->RetargetingConditionName;
    }

    /**
     * Sets RetargetingConditionName.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRetargetingConditionName($value = null)
    {
        $this->RetargetingConditionName = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditionDescription.
     *
     * @return string|null
     */
    public function getRetargetingConditionDescription()
    {
        return $this->RetargetingConditionDescription;
    }

    /**
     * Sets RetargetingConditionDescription.
     *
     * @param string|null $value
     * @return $this
     */
    public function setRetargetingConditionDescription($value = null)
    {
        $this->RetargetingConditionDescription = $value;

        return $this;
    }

    /**
     * Gets Login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets RetargetingConditionID.
     *
     * @return int|null
     */
    public function getRetargetingConditionID()
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets RetargetingConditionID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setRetargetingConditionID($value = null)
    {
        $this->RetargetingConditionID = $value;

        return $this;
    }

    /**
     * Gets RetargetingCondition.
     *
     * @return RetargetingConditionItem[]|null
     */
    public function getRetargetingCondition()
    {
        return $this->RetargetingCondition;
    }

    /**
     * Sets RetargetingCondition.
     *
     * @param array|null $value
     * @return $this
     */
    public function setRetargetingCondition(array $value = null)
    {
        $this->RetargetingCondition = $value;

        return $this;
    }


}

